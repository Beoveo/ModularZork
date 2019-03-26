<?php

namespace es\ucm\fdi\aw;

class FormularioCambiarContraseña extends Form
{

  public function __construct()
  {
    parent::__construct('formPass');
  }
  
  protected function generaCamposFormulario ($datos)
  {

    if ($datos) {
      $username = isset($datos['nombre']) ? $datos['nombre'] : $nombre;
    }

    $camposFormulario=<<<EOF
		<fieldset>
		  <legend>Cambiar Contraseña de Usuario</legend>
		  <p><label>Password:</label> <input type="password" name="password1" /></p>
          <p><label>Repeat:</label> <input type="password" name="password2" /></p>
          <button type="submit">Confirmar</button>
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
    if ( !$username || ! mb_ereg_match(self::HTML5_EMAIL_REGEXP, $username) ) {
      $result[] = 'El nombre de usuario no es válido';
      $ok = false;
    }
    $password = $datos['password'] ?? '' ;
    if ( ! $password ||  mb_strlen($password) < 4 ) {
      $result[] = 'La contraseña no es válida';
      $ok = false;
    }

      
    if ( $ok ) {
      $user = Usuario::login($username, $password);
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
