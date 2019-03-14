<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<link rel="stylesheet" type="text/css" href="forms.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Creación</title>
	</head>

	<body>
		<div id="contenedor">
			
			<?php
				include('cabecera.php');
				include('sidebarIzq.php'); //Aqui va el grid
			?>

			<div id="contenido">
				<h1>CREACION</h1>
				<p>Cosas sobre creacioooooooooooooooooooooooooooooooooooooooooooon. </p>
			</div>

			<?php 
				
				include("pie.php");
			?>

		</div> <!-- Fin del contenedor -->

	</body>
</html>
