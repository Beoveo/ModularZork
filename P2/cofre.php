<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cofre</title>
</head>

<body>
	<div id="contenedor">

		<?php require_once("cabecera.php"); ?>
		<div id="sidebar-left">
			<div id="menuIzq">
				<div id="botonSideBarIzq">
					<!-- Para los enlaces de la barra de menu -->
					<a href="noticias.php" class="button" >Noticias</a>
					<a href="eventos.php" class="button" >Eventos</a>
					<a href="cofre.php" class="button active" >Cofre</a>
				</div>
			</div>

			<div id="grid"> <!-- https://codepen.io/cssgrid/pen/kkqqBk -->
				<ul class="list">
					<!-- por cada elemento creamos 1 list-item -->
					<?php 
					for($i = 0; $i < 10; $i++){
						require("incluirObjetos.php");
					}
					?>
				</ul>
			</div>
			
		</div> 
		<?php require_once("contenidoCreacion.php"); ?>

		<?php require_once("pie.php"); ?>
	</div>
</body>
</html>

