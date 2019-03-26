<?php

require_once __DIR__.'/includes/config.php';

?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  <title>Portada</title>
</head>
<body>
<div id="contenedor">
<?php
    $app->doInclude('comun/cabecera.php');
    echo "<div id='sidebar-left'>";
    $app->doInclude('comun/sidebarIzq.php');
    echo"</div>";
    $app->doInclude('contenidos/contenidoCreacion1.php');
    $app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>
