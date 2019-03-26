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
<!-- https://codepen.io/cssgrid/pen/kkqqBk -->
<?php
$app->doInclude('comun/cabecera.php');
echo "<div id='sidebar-left'>";
$app->doInclude('comun/menuSideBarIzq.php');
echo"<div id='grid'> <ul class='list'>"; 
for($i = 0; $i < 10; $i++){
    include('incluirObjetos.php');
}
echo"</ul></div></div>";
?>
	<div id="contenido">
		<h1>Página principal</h1>
		<p> Aquí está el contenido público, visible para todos los usuarios. </p>
	</div>
<?php
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>