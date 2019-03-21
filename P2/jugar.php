<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css"/>
		
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
				<div id="demo">
					<h2>Creo que estas en el calabozo y todo esta oscuro, a ver que pudes hacer!!!</h2>
					
					<p>Creo que lo tiene facil y lo único que puedes hacer es romper la ventana.</p>

		    		<img src="juegoimg/calabozoOscuro.png" id="imgjuego">
		    		<input type="button" onclick="changeImage()" value="Encender la luz" />
		    		

		    		<script>
			        function changeImage() {
			            var image = document.getElementById('imgjuego');
			            image.src = "juegoimg/calabozocerrado.png";

						/*await sleep(2);
			        	document.getElementById('demo').style.display='none' */   
			        }

		   			 </script>
		   			</div>


			
			</div>

			<div id="contenido">
				<?php
					
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
