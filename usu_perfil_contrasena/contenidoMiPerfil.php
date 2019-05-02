<?php
namespace es\ucm\fdi\aw;

	if (isset($_SESSION["login"]) && ($_SESSION["login"]===true)) {
		
		$usermail = $_SESSION['nombre'];
		$user = Usuario::buscaUsuario($usermail);	
		$nombr = $user->nombre();
		$correo = $user->usermail();
	}
	?>
<div id="contenido">
    <div id="imagenFromulario">
     <img id ="imgPerf" src="img/agu.png" alt=""/>
     <form name="uploadimage" type="POST" enctype="multipar/fromdata">
        <input type="file" name="imagen"/>
        <input type="submit" name="uploadimage" value="Subir imagen"/> 
     </form>
    </div>
	
    <div id=infoPerfil>
        <h3 id="agustin">Nombre de usuario:</h3>
        	<?php echo "$nombr"?>
        <a href='cambiarNombre.php'type='button' >Cambiar Nombre</a>
        <h3 id="correo">Correo Electronico:</h3>
			<?php echo "$correo"?>
        <a href='cambiarCorreo.php'type='button' >Cambiar Correo</a>
		<h3 id="correo">Contraseña:</h3>
        <a href='cambiarContraseña.php'type='button' >Cambiar Contraseña</a>
        </div>
	</div>