<?php
require_once __DIR__.'/includes/config.php';

$app->logout();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Portada</title>
	</head>

	<body>
		<div id="contenedor">
			<?php
                $app->doInclude('comun/cabecera.php');
                $app->doInclude('comun/sidebarIzq.php');
                $app->setPagAct("ranking");
                $app->doInclude("contenidos/contenidoRanking.php");
                $app->doInclude('comun/sidebarDer.php');
                $app->doInclude('comun/pie.php');
			?>
		</div> <!-- Fin del contenedor -->

	</body>
</html>

<!--	
Bibliografia
Login : http://www.masiosare.mx/login-sin-base-de-datos/
Manual PHP
Material de la asignatura -->
