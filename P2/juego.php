<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<link rel="stylesheet" type="text/css" href="game.css" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Modular Zork</title>
	</head>

	<body>
		<div id="contenedor">
			
			
			<?php
				include('cabecera.php');
				include('sidebarIzq.php');
			?>

			<div id="contenido">
				<h1>Modular Zork</h1>
				  <div id="subwrapper">
					<div id="zork-area">
						<button id="start">Start</button>
					</div>
				</div>

			</div>

			<?php 
				
				include("pie.php");
			?>

		</div> <!-- Fin del contenedor -->
		<script type="text/javascript" src="zork/javascript/game.js"></script>
	</body>
</html>

<!--	


Bibliografia

Login : http://www.masiosare.mx/login-sin-base-de-datos/

Manual PHP

Material de la asignatura -->
