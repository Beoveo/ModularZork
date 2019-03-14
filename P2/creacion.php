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

				<div id="contenidocreacion">

					<div id="eligemapa">
						<h1> Elige un mapa </h1>
						<p>Cosas sobre creacioooooooooon por cosd sdfsfi dfe sa fdwseeg sdfsefs srf. </p>
					</div>

					<div id="eligemonstruo">
						<h1> Elige un monstruo </h1>
						<p>Cosas sobre creacioooooooooon por cosd sdfsfi dfe sa fdwseeg sdfsefs srf. </p>
					</div>

					<div id="eligeobjeto">
						<h1> Elige un objeto </h1>
						<p>Cosas sobre creacioooooooooon por cosd sdfsfi dfe sa fdwseeg sdfsefs srf. </p>
					</div>
					<div id="contenidoboton">
					<form action="index.php" method="POST">
  						<p><button type="submit">CREAR</button></p>
					</form>
				</div>
				</div>

				<?php 
					include("pie.php");
				?>

			</div> <!-- Fin del contenedor -->

		</body>
		</html>
