<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Eventos</title>
</head>

<body>
	<div id="contenedor">

		<?php require_once('includes/comun/cabecera.php'); ?>
		<div id="sidebar-left">
			<?php require_once('includes/comun/menuSideBarIzq.php'); ?>
			<!-- Son imagenes de ejemplo -->
			<img src="img/poster.jpg" alt=""/>
			<img src="img/poster1.jpg" alt=""/>

		</div> 
		<!-- Tendria que cargar el contenido de la pagina actual -->
		<?php require_once('contenidoCreacion.php'); 
			  require_once('includes/comun/pie.php'); ?>
	</div>
</body>
</html>

