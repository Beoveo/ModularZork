<?php

namespace es\ucm\fdi\aw;

class FormularioSignin extends Form
{

  const HTML5_EMAIL_REGEXP = '^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$';

  public function __construct()
  {
    parent::__construct('formSignin');
  }
  
  protected function generaCamposFormulario ($datos)
  {
    $username = 'examples@domain.org';
      $name= 'Bicholoco';
      $password='';
      $password2='';
    if ($datos) {
      $username = isset($datos['username']) ? $datos['username'] : $username;
      /* Similar a la comparación anterior pero con el operador ?? de PHP 7 */
      $password = $datos['password'] ?? $password;
      $password2 = $datos['password2'] ?? $password2;
    }
    $camposFormulario=<<<EOF
		<fieldset>
		  <legend>Usuario y contraseña</legend>
        <p><label>Nick: </label> <input type="text"        name="name" placeholder="$name"/></p>
		  <p><label>e-mail:</label> <input type="text" name="username" placeholder="$username"/></p>
		  <p><label>Password:</label> <input type="password" name="password"/><br /></p>
          <p><label>Repeat:</label> <input type="password" name="password2" /><br /></p>
		  <button type="submit">Entrar</button>
		</fieldset>
EOF;
    return $camposFormulario;
  }

  /**
   * Procesa los datos del formulario.
   */
  protected function procesaFormulario($datos)
  {
    $result = array();
    $ok = true;
    $username = $datos['username'] ?? '' ;
    if ( !$username ||  !mb_ereg_match(self::HTML5_EMAIL_REGEXP, $username) || Usuario::buscaUsuario($username)) {
      $result[] = 'El nombre de usuario no es válido';
      $ok = false;
    }
      
    $name= $datos['name'] ?? '' ;
      
    $password = $datos['password'] ?? $password;
    $password2 = $datos['password2'] ?? $password2;
    if ( $password != $password2 ||  mb_strlen($password) < 4 ) {
        if($password != $password2) $result[] = 'Las contraseñas no coinciden';
      $result[] = 'La contraseña no es válida';
      $ok = false;
    }
    if ( $ok ) {
      $user = Usuario::signin($name,$username,$password);
      if ( $user ) {
        // SEGURIDAD: Forzamos que se genere una nueva cookie de sesión por si la han capturado antes de hacer login
        session_regenerate_id(true);
        Aplicacion::getSingleton()->login($user);
        $result = \es\ucm\fdi\aw\Aplicacion::getSingleton()->resuelve('/index.php');
      }else {
        $result[] = 'El usuario o la contraseña es incorrecta';
      }
    }
    return $result;
  }
}
