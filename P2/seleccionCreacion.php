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
			<!-- Paginacion de resultados: https://www.jose-aguilar.com/blog/paginacion-resultados-con-php/-->
			<div id="eligemapa">
				<h1> Elige un mapa </h1>

				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap1"/>
						<img src="img/fondo.jpg"/>
					</label> </p>
					<p><em> Mapa de la cueva: Tiene muchos enemigos.....Y otras cosas </em></p>
				</div>
				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap2"/>
						<img src="img/desierto.jpg"/>
					</label></p>
					<p><em> Mapa del desierto: Tiene monstruos especiales...Es complicado sobrevivir </em></p>
				</div>
				<div id="seleccionMapa">

					<p><label class="checkeable">
						<input type="checkbox" name="cap3"/>
						<img src="img/mapa.jpg"/>
					</label></p>
					<p><em> Mapa del bosque: Es fácil esconderse en el...Para los monstruos verdes también </em></p>
				</div>
				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap4"/>
						<img src="img/fondo.jpg"/>
					</label> </p>
					<p><em> Mapa de la cueva: Tiene muchos enemigos...Y otras cosas </em></p>
				</div>	
				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap2"/>
						<img src="img/desierto.jpg"/>
					</label></p>
					<p><em> Mapa del desierto: Tiene monstruos especiales...Es complicado sobrevivir </em></p>
				</div>
				<center>
					<!-- Para los enlaces a siguientes paginas -->
					<a href="cofre.php" class="button" >1</a>
					<a href="cofre.php" class="button" >2</a>
					<a href="cofre.php" class="button" >3</a>
					<a href="cofre.php" class="button active" >...</a>
				</center>
			</div>

			<div id="eligemonstruo">
				<h1> Elige un monstruo </h1>
				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap1"/>
						<img src="img/troll.jpg"/>
					</label> </p>
					<p><em> Troll: Asusta mucho ,pero le dan miedo los bichos </em></p>
				</div>
				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap2"/>
						<img src="img/monstruo1.png"/>
					</label></p>
					<p><em> Monstruo del fango: Es muy escurridizo </em></p>
				</div>
				<center>
					<!-- Para los enlaces a siguientes paginas -->
					<a href="cofre.php" class="button" >1</a>
					<a href="cofre.php" class="button" >2</a>
					<a href="cofre.php" class="button" >3</a>
					<a href="cofre.php" class="button active" >...</a>
				</center>
			</div>

			<div id="eligeobjeto">
				<h1> Elige un objeto </h1>
				<div id="seleccionMapa">

					<p><label class="checkeable">
						<input type="checkbox" name="cap3"/>
						<img src="img/hacha.jpg"/>
					</label></p>
					<p><em> Hacha: Hace un poquito de daño </em></p>
				</div>
				<div id="seleccionMapa">
					<p><label class="checkeable">
						<input type="checkbox" name="cap4"/>
						<img src="img/objeto.png"/>
					</label> </p>
					<p><em> Bomba: Elimina enemigos fuertes </em></p>
				</div>
				<center>
					<!-- Para los enlaces a siguientes paginas -->
					<a href="cofre.php" class="button" >1</a>
					<a href="cofre.php" class="button" >2</a>
					<a href="cofre.php" class="button" >3</a>
					<a href="cofre.php" class="button active" >...</a>
				</center>
			</div>
			<center>
				<div id="contenidoboton">
					<form action="creacion.php" method="POST">
						<p><input type="submit" value="CREAR" ></p>
					</form>
				</div>
			</center>
		</div>

		<?php require_once('pie.php'); ?>
	</div>
</body>
</html>

<!-- <form action="">
			<p><input type="radio" name="option" value="objeto1"> Correr hacia la salida</p>
			<p><input type="radio" name="option" value="objeto2"> Enfrentarte al monstruo</p>
			<p><input type="radio" name="option" value="objeto3"> Comerte al monstruo </p>
		</form>
	-->
