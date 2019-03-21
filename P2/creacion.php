<?php
session_start();
?>

<!-- Segunda pantalla de creacion -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Creación</title>
</head>

<body>
	<div id="contenedor">

		<?php
		include('cabecera.php');
				include('sidebarIzq.php'); //Aqui va el grid
				?>

				<div id="contenidocreacion">

					<div id="pantalla">
						<img src="img/fondo.jpg" alt="">
					</div>

					<div id="pregunta">
						<h1> Elige un mapa </h1>
						<p>Cosas sobre creacioooooooooon por cosd sdfsfi dfe sa fdwseeg sdfsefs srf. </p>
					</div>

					<div id="respuesta">
						<h1> Elige un monstruo </h1>
						<p>Cosas sobre creacioooooooooon por cosd sdfsfi dfe sa fdwseeg sdfsefs srf. </p>
					</div>
				</div>

				<?php 
					include("pie.php");
				?>

			</div> <!-- Fin del contenedor -->

		</body>
		</html>
