<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<link rel="stylesheet" type="text/css" href="formEstilos.css" />
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
				<h1>Dale a Jugar para empezar</h1>
				<a href="jugar.php" class="button" >Jugar!!</a>

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
