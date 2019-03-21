<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Selección Creación</title> <!--Pantalla 1 de creacion -->
</head>

<body>
	<div id="contenedor">

		<?php
		include('cabecera.php');
				include('sidebarIzq.php'); //Aqui va el grid
				?>

				<div id="contenidocreacion">

					<div id="eligemapa">
						<h1> Elige un mapa </h1>
						<p><label class="checkeable">
							<input type="checkbox" name="cap1"/>
							<img src="img/fondo.jpg"/>
						</label> </p>
						<p><label class="checkeable">
							<input type="checkbox" name="cap2"/>
							<img src="img/fondo.jpg"/>
						</label></p>
						<p><label class="checkeable">
							<input type="checkbox" name="cap3"/>
							<img src="img/fondo.jpg"/>
						</label></p>

						<p><label class="checkeable">
							<input type="checkbox" name="cap4"/>
							<img src="img/fondo.jpg"/>
						</label> </p>
						<p><label class="checkeable">
							<input type="checkbox" name="cap5"/>
							<img src="img/fondo.jpg"/>
						</label></p>
						<p><label class="checkeable">
							<input type="checkbox" name="cap6"/>
							<img src="img/fondo.jpg"/>
						</label></p>
						
					</div>

					<div id="eligemonstruo">
						<h1> Elige un monstruo </h1>
						<form action="">
							<p><input type="radio" name="option" value="monstruo1"> Correr hacia la salida</p>
							<p><input type="radio" name="option" value="monstruo2"> Enfrentarte al monstruo</p>
							<p><input type="radio" name="option" value="monstruo3"> Comerte al monstruo </p>
						</form>
					</div>

					<div id="eligeobjeto">
						<h1> Elige un objeto </h1>
						<form action="">
							<p><input type="radio" name="option" value="objeto1"> Correr hacia la salida</p>
							<p><input type="radio" name="option" value="objeto2"> Enfrentarte al monstruo</p>
							<p><input type="radio" name="option" value="objeto3"> Comerte al monstruo </p>
						</form>
					</div>
					<center> <!-- Deberia centrarse en el css???  -->
						<div id="contenidoboton">
							<form action="creacion.php" method="POST">
								<p><input type="submit" value="CREAR" ></p>
							</form>
						</div>
					</center>
				</div>

				<?php 
					include("pie.php");
				?>

			</div> <!-- Fin del contenedor -->

		</body>
		</html>
