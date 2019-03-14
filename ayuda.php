<?php SESSION_START() ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
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
		<h1>Dudas más frecuentes</h1>
		<ul>
			<a href ='objetivo.php'><h3>Objetivo del juego</h3></a> </p>
			<a href ='creacion.php'><h3>Creación</h3></a></p>
			<a href ='ranking.php'><h3>Ranking</h3></a></p>
			<a href ='compras.php'><h3>Compras</h3></a></p>
		</ul>
	</div>
	
	<?php require_once('pie.php')?>
	<!--<div id="pie">
		Pie de página
	</div>-->
</div> <!-- Fin del contenedor -->

</body>
</html>

