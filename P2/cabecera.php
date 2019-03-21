

<div id="cabecera">
	<h1>Modular ZORK</h1>
	
    <div id="menu">
	   
	    <a href="index.php" class="button active" >Inicio</a>
	    <a href="juego.php" class="button" >Juego</a>
	    <a href="ranking.php" class="button" >Ranking</a>
	    <a href="tienda.php" class="button" >Tienda</a>
	    <a href="creacion.php" class="button" >Creación</a>
	    <a href="ayuda.php" class="button" >Ayuda</a>
    </div>

	<div class="saludo">
		<?php
			if(isset($_SESSION["login"]) AND $_SESSION["login"]){
				echo "<p>Hola, " .$_SESSION["nombre"] . "<a href='logout.php'>(salir) </a><p>";
			}
			else{
				echo "Usuario desconocido. <a href='login.php'>Login</a>";
			}
		
		?>	
	</div>
</div>
