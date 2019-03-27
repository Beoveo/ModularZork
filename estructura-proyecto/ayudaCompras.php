<?php

require_once __DIR__.'/includes/config.php';

?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  <title>Login</title>
</head>
<body>
<div id="contenedor">
<?php
$app->doInclude('comun/cabecera.php');
$app->doInclude('comun/sidebarIzq.php');
?>
	<div id="contenido">
		<h2>Tienda</h2>
		<p>En primer luar deberemos acceder a la <a href ='tienda.php'>Tienda</a> e iremos eligiendo los objetos que queremos comprar, los cuales se irán guardando en la cesta de compra.</p>
		<h2>Obtención de objetos</h2>
		<p>Una vez que hayamos elgido todos los artículos que deseemos, haremos click sobre el icono de la cesta y ahí veremos los objetos y la suma total de monedas que son necesrias para comprarlos.</p>
		<p>En caso de que la cantidad de monedas que tengamos sean insuficientes podremos quitar objetos de la cesta o comprar monedas mediante dinero real.</p>
		<h2>Obtención de monedas</h2>
		<p>En la tienda encontraremos una sección en la que podremos comprar monedas del juego mediante pagos con tajeta de crédito o con ptras vías de apgo por internet.</p>
		<p>Según vayamos superando los distintos mapas y objetivos, obtendremos monedas que podremos emplear en la tienda.</p>
	</div>
<?php
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>