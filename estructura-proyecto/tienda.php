<?php
	require_once __DIR__.'/includes/config.php';
?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  	<title>Objeto</title>
</head>
<body>
	<div id="contenedor">
		<?php
			$app->doInclude('comun/cabecera.php');
			$app->doInclude('comun/sidebarIzq.php');
		?>
		<div id="contenido">
			<div id="mapas">
				<h1>Mapas</h1>
				<ul class=listObj id="listaMapas">
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/desierto.jpg"/>
							</div>
							<p>Desierto</p>
						</li>
					</a>
					<a href="objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/fondo.jpg"/>
							</div>
							<p>Cueva</p>
						</li>
					</a>
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/mapa.jpg"/>
							</div>
							<p>Bosque</p>
						</li>
					</a>
				</ul>
			</div>
			<div id="personajes">
				<h1>Personajes</h1>
				<ul class=listObj id="listaPersonajes">
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/bea.png"/>
							</div>
							<p>Chica</p>
						</li>
					</a>
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/geo.png"/>
							</div>
							<p>Chico</p>
						</li>
					</a>
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/troll.jpg"/>
							</div>
							<p>Troll</p>
						</li>
					</a>
				</ul>
			</div>
			<div id="objetos">
				<h1>Objetos</h1>
				<ul class=listObj id="listaObjetos">
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/knive.png"/>
							</div>
							<p>Cuchillo</p>
						</li>
					</a>
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/axe.png"/>
							</div>
							<p>Hacha</p>
						</li>
					</a>
					<a href="Objeto.php">
						<li class="item">
							<div class="imgen">
								<img class="imgObj" src="img/sword.png"/>
							</div>
							<p>Espada</p>
						</li>
					</a>
				</ul>
			</div>
		</div>
		<?php
			$app->doInclude('comun/sidebarDer.php');
			$app->doInclude('comun/pie.php');
		?>
	</div>
</body>
</html>