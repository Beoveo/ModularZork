<?php

require_once __DIR__.'/includes/config.php';

use es\ucm\fdi\aw\Mensaje;
use es\ucm\fdi\aw\FormularioMensaje;
use es\ucm\fdi\aw\FormularioRespuesta;
use es\ucm\fdi\aw\Aplicacion;

function listadoMensajes($idMensajePadre = NULL)
{
  $html = '<ul>';
  $html .= listadoMensajesRecursivo($idMensajePadre);
  $html .= '</ul>';
  return $html;
}

function listadoMensajesRecursivo($idMensajePadre = NULL)
{
  $app = Aplicacion::getSingleton();
  $html = '';
  $mensajes = Mensaje::mensajes($idMensajePadre);
  foreach($mensajes as $m) {
    $html .= '<li>'.$m->texto(). ' ('.$m->username().')';
    if ($app->tieneRol('user')) {
      $formRespuesta = new FormularioRespuesta($m->id());
      $html .= $formRespuesta->gestiona();
    }
    $html .= '</li>';

    if (Mensaje::numMensajes($m->id()) > 0) {
      $html .= listadoMensajes($m->id());
    }
  }

  return $html;
}

?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  <title>Mensajes</title>
</head>
<body>
<div id="contenedor">
<?php
$app->doInclude('comun/cabecera.php');
$app->doInclude('comun/sidebarIzq.php');
?>
  <div id="contenido">
<?php
if ($app->tieneRol('user')) {
  $formMensaje = new FormularioMensaje();
  echo $formMensaje->gestiona();
}
?>
    <h1>Mensajes</h1>
<?php
  echo listadoMensajes();
?>
  </div>
<?php
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>
