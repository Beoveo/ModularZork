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
    echo "<div id='sidebar-left'>";
    $app->doInclude('comun/menuSideBarIzq.php');
echo'
<div id="contenidoNoticias">
    <h1> Últimas noticias sobre el videojuego <em>Zork</em></h1>
        <p>"Zork" era originalmente una jerga hacker del MIT para un programa inacabado. Los que lo implementaron llamaron al juego completo Dungeon, pero para ese punto el nombre de Zork ya se había popularizado. Zork también ha sido adaptado a una extensa serie de libros.</p>

        <p>Tres de los programadores originales de Zork se juntaron con otros para fundar Infocom en 1979. Esa compañía adaptó el Zork del PDP-10 y desarrolló los Zork I, II y III, una trilogía de juegos para la mayoría de las pequeñas computadoras populares de la época, incluyendo el Apple II, el Commodore 64, la familia Atari de 8 bits, el TRS-80, sistemas CP/M y el IBM PC. Zork I fue publicado en discos flexibles de 5 ¼"y 8". Joel Berez y Marc Blank desarrollaron una máquina virtual especializada para ejecutar Zork I, llamada la Máquina-Z. El primer "Z-machine Interpreter Program" (ZIP) (Programa Interpretador de Máquina-Z) para una pequeña computadora fue escrito por Scott Cutler para el TRS-80. La trilogía fue escrita en ZIL, que significa "Zork Implementation Language" (Lenguaje de Implementación Zork), un lenguaje similar a LISP.</p>
</div>
</div>';
    include('contenidoCreacion.php');
    $app->doInclude('comun/sidebarDer.php');
    $app->doInclude('comun/pie.php');
?>
</div>
</body>
</html>
