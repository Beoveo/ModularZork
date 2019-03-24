<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Selección Creación</title> <!--Pantalla 1 de creacion -->
</head>

<body>
	<div id="contenedor">
		<?php require_once('cabecera.php'); 
			  require_once('sidebarIzq.php'); 
			  require_once("contenidoCreacion.php");
			  require_once("pie.php"); ?>
	</div>
</body>
</html>
