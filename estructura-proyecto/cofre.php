<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cofre</title>
</head>

<body>
	<div id="contenedor">

		<?php require_once('includes/comun/cabecera.php'); ?>
		<div id="sidebar-left">
					<?php require_once('includes/comun/menuSideBarIzq.php'); ?>

			<div id="grid"> <!-- https://codepen.io/cssgrid/pen/kkqqBk -->
				<ul class="list">
					<!-- por cada elemento creamos 1 list-item -->
					<?php 
					for($i = 0; $i < 10; $i++){
						require('incluirObjetos.php');
					}
					?>
				</ul>
			</div>
			
		</div> 
		<!-- Hace falta una variable de sesion para saber cual es el contenido que se está mostrando
				y así poder incluirlo al cambiar el sidebar izq -->
		<?php require_once('contenidoCreacion.php'); ?>
		<?php require_once('includes/comun/pie.php'); ?>
	</div>
</body>
</html>

