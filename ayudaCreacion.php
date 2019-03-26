<?php

require_once __DIR__.'/includes/config.php';

?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  <title>Login</title>
</head>
<body>
<div id="contenedor">
<?php
$app->doInclude('comun/cabecera.php');
$app->doInclude('comun/sidebarIzq.php');
?>
	<div id="contenido">
	<h2>Comienzo</h2>
		<p>Una vez estemos en la pantalla de <a href ='creación.php'>Creación</a> seleccionamos en las distintas pantallas, monstruos y objetos que queremos añadir en nuestro mapa.</p>
			<p></p>
		<h2>Edición</h2>
		<p>Las pantallas que seleccionemos se añadiran en orden de selección, por lo que será ese el orden en el que luego se editarán.Para añadir monstruos los seleccionaremos y 
		arrastraremos hacia donde queramos añadirlos, lo mismo será con los objetos. Podremos añadir tantos objetos y rivales como hayamos seleccionado previamente.</p>
		<p>Una vez hayamos terminado con esa pantalla pasaremos a la siguiente usando las flechas debajo de la pantalla de edición.</p>
			<p></p>
		<p>En caso de que queramos quitar algún objeto de los ya colocados, sólo habrá que arrastrarlo de nuevo a la pantalla de donde lo cogimos.</p>

	</div>
<?php
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>