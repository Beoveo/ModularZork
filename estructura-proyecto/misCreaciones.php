<?php
//http://estradawebgroup.com/Post/Como-crear-una-tabla-utilizando-DIVs-y-CSS/4152
//sitio de referencia para crear la tabla con div
require_once __DIR__.'/includes/config.php';

//namespace es\ucm\fdi\aw;

//use es\ucm\fdi\aw\Aplicacion as App;
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  <title>misCreaciones</title>
</head>
<body>
<div id="contenedor">
<?php
$app->doInclude('comun/cabecera.php');
$app->doInclude('comun/sidebarIzq.php');
$app->doInclude('contenidos/contenidoMisCreaciones.php');
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>