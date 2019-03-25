<?php

require_once __DIR__.'/includes/config.php';

?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="<?= $app->resuelve('/css/estilo.css') ?>" />
  <title>Portada</title>
</head>
<body>
<div id="contenedor">
<?php
$app->doInclude('comun/cabecera.php');
$app->doInclude('comun/sidebarIzq.php');
?>
	<div id="contenido">
        <div>
            <img id ="imgMiembro3" src="img/agu.png" alt=""/>
            <form name="uploadimage" type="POST" enctype="multipar/fromdata">
                <input type="file" name="imagen"/>
                <input type="submit" name="uploadimage" value="Subir imagen"/> 
            </form>
        </div>
        <div id=infoPerfil>
            <h3 id="agustin">Nombre de usuario: Agustin Jofre Millet</h3>
            <a href='NuevosPHP/cambiarNombre.php'type='button' >Cambiar Nombre</a>
            <h3 id="correo">Correo Electronico: agustin@ucm.es</h3>
            <a href='NuevosPHP/cambiarCorreo.php'type='button' >Cambiar Correo</a>
            <h3 id="agustin">Contraseña: *********</h3>
            <a href='NuevosPHP/cambiarContraseña.php'type='button' >Cambiar Contraseña</a>
        </div>
	</div>
<?php
$app->doInclude('comun/sidebarDer.php');
$app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>
