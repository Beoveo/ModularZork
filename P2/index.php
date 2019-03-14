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
				
			?>
			<div class="caja">
				<?php include('sidebarIzq.php'); ?>
			</div>

			<div id="contenido">
				<h1>Página principal</h1>
				<p>Este juego está basada en el clásico juego de los 80, que consistía en ir superando niveles de mazmorras mediante comandos por la consola. Puesto que hoy en día los juegos gráficos son los que triunfan hemos decidido renovar la imagen del juego y hacer una experiencia más visual y dinámica para el usuario. </p>

				<p>En el menu superior puedes navegar para poder jugar eligiendo mapas predeterminados o crear tus propios niveles . ¡Intentalo!</p>

				<p>Aqui una imagen o video</p>

			</div>

			<div id="contenido">
				<?php
					include('formulario.php');
				?>

			</div>

			<?php 
				include("pie.php");
			?>

		</div> <!-- Fin del contenedor -->

	</body>
</html>

<!--	


Bibliografia

Login : http://www.masiosare.mx/login-sin-base-de-datos/

Manual PHP

Material de la asignatura -->
