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
		<p>El objetivo del juego es completar el mapa qe hayamos escogido e ir recogiendo objetos. </p>
		<p>A lo largo del mapa se nos iran presentando distintas dificultades, que se podrán ir solventando en la propia sala, o buscando en las salas que haya por todo el mapa, distintos objetos.</p>
		<p>En cada una de las salas se nos darán disitntas opciones para realizar y seguir avanzando. Pero tambien deberemos de tener cuidado con los monstruos que se nos puedan ir apareciendo,
		pues deberemos derrotarlos tarde o temprano si queremos superar el mapa por completo.</p>
	</div>
<?php
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>