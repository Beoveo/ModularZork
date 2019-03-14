<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<link rel="stylesheet" type="text/css" href="forms.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Portada</title>
	</head>

	<body>
		<div id="contenedor">
			
			<?php
				include('cabecera.php');
				include('sidebarIzq.php');
			?>

			<div id="contenido">
				<div id="mapas">

				</div>
				<div id="personajes">
					
				</div>
				<div id="objetos">
					
				</div>
			</div>

			<?php 
				include("pie.php");
			?>


		</div>
	</body>
</html>