<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<link rel="stylesheet" type="text/css" href="forms.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Tienda</title>
	</head>

	<body>
		<div id="contenedor">
			
			<?php
				include('cabecera.php');
				include('sidebarIzq.php');
			?>

			<div id="contenido">
				<div id="ofertas">
					<h1>Ofertas!</h1>
					<ul class=listObj id="listOfertas">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="ObjEjem/knive.png"/>
							</div>
							<p>Cuchillo</p>
							<p>10 Zorkies</p>
						</li>
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="ObjEjem/axe.png"/>
							</div>
							<p>Hacha</p>
							<p>50 Zorkies</p>
						</li>
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="ObjEjem/sword.png"/>
							</div>
							<p>Espada</p>
							<p>100 Zorkies</p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
							<p></p>
						</li>
					</ul>
				</div>
				<div id="mapas">
					<h1>Mapas</h1>
					<ul class=listObj id="listaMapas">
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
					</ul>
				</div>
				<div id="personajes">
					<h1>Personajes</h1>
					<ul class=listObj id="listaPersonajes">
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
					</ul>
				</div>
				<div id="objetos">
					<h1>Objetos</h1>
					<ul class=listObj id="listaObjetos">
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
						<li class="item">
							<div class="imgen">
								
							</div>
							<p></p>
						</li>
					</ul>
				</div>
			</div>

			<?php 
				include("pie.php");
			?>


		</div>
	</body>
</html>
