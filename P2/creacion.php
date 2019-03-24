<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Selección Creación</title> <!--Pantalla 1 de creacion -->
</head>

<body>
	<div id="contenedor">
		<?php require_once('cabecera.php'); 
		require_once('sidebarIzq.php'); 
		?>
		<div id="contenidocreacion">
			<h1><em>Demo de creación </em></h1>
			<div id="pantalla">
				<img src="img/fondo.jpg" alt="">

				<!-- https://desarrolloweb.com/articulos/1448.php para los radiobuttons -->
				<div id="pregunta">
					<h1> Elige la pregunta 1/5: </h1>
					<form action="">
						<p><input type="radio" name="option" value="p1"> Un monstruo viene hacia ti, ¿qué quieres hacer?</p>
						<p><input type="radio" name="option" value="p2"> De los dos objetos que hay en la sala solo puedes escoger uno, ¿cuál eliges?</p>
						<p><input type="radio" name="option" value="p3"> No hay salida.¿Qué camino escoges?</p>
					</form>
				</div>

				<div id="respuesta">
					<h1>Elige 3 posibles respuestas: </h1>
					<form action="">
						<p><input type="checkbox" name="opcion" value="1">Correr hacia la salida</p>

						<p><input type="checkbox" name="opcion" value="2" checked>Enfrentarte al monstruo</p>

						<p><input type="checkbox" name="opcion" value="3">Comerte al monstruo</p>

						<p><input type="checkbox" name="opcion" value="4">Engañar al monstruo</p>

						<p><input type="checkbox" name="opcion" value="5"> Esconderse</p>	
					</form>
				</div>

				<div id="contenidoboton">
					<form action="creacion.php" method="POST">
						<input type="submit" value="Anterior" >
						<input type="submit" value="Siguiente" >
					</form>
				</div>

			</div>		
		</div>
		<?php require_once('pie.php'); ?>
	</div>
</body>
</html>