<?php

namespace es\ucm\fdi\aw;

class FormularioCambiarNombre extends Form
{

  public function __construct()
  {
    parent::__construct('formName');
  }
  
  protected function generaCamposFormulario ($datos)
  {
    $nombre = 'ManolitoElFiera';
    $password = '12345';
    if ($datos) {
      $username = isset($datos['nombre']) ? $datos['nombre'] : $nombre;
    }

    $camposFormulario=<<<EOF
		<fieldset>
		  <legend>Cambiar Nombre de Usuario</legend>
		  <p><label>Nick:</label> <input type="text" name="nombre" placeholder="$nombre"/></p>
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
    $name = $datos['nombre'] ?? '' ;
    if ( !$name) {
      $result[] = 'El nombre de usuario no es válido';
      $ok = false;
    }  
    if ( $ok ) {
      $user = Usuario::changeName($name);
      if ( $user ) {
        $result = \es\ucm\fdi\aw\Aplicacion::getSingleton()->resuelve('/miPerfil.php');
      }else {
        $result[] = 'El usuario o la contraseña es incorrecta';
      }
    }
    return $result;
  }
}
