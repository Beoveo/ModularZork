<?php SESSION_START() ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estiloNoDef.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

<div id="contenedor">

	<?php require_once('cabecera.php')?>
	<!--<div id="cabecera">
		<h1>Mi gran página web</h1>
		<div class="saludo">
		Usuario desconocido. <a href='login.php'>Login</a>	</div>
	</div>-->
	
	<?php require_once('sidebarIzq.php')?>
	<!--<div id="sidebar-left">
		<h3>Navegación</h3>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="contenido.php">Ver contenido</a></li>
			<li><a href="admin.php">Administrar</a></li>
		</ul>
	</div>-->
	
	<div id="contenido">
		<ul id= "principal">
			<h1>Dudas más frecuentes</h1>
			<li class = "prin"><a href ='objetivo.php' class = "prin">Objetivo del juego</a></li>
			<li class = "prin"><a href ='ayudaCreacion.php' class = "prin">Creación</a></li>
			<li class = "prin"><a href ='ayudaRanking.php' class = "prin">Ranking</a></li>
			<li class = "prin"><a href ='ayudaCompras.php' class = "prin">Compras</a></li>

			</div>
	
	
	<?php require_once('pie.php')?>
	<!--<div id="pie">
		Pie de página
	</div>-->
</div> <!-- Fin del contenedor -->

</body>
</html>

