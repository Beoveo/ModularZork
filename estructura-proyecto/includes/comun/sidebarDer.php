	<div id="sidebar-right">
		  <?php
                if(!isset($_SESSION['login'])){
                                     
                }
                else{
                    echo"
                        <ul>
                           <li> <a href='miPerfil.php'class='button' >Mi Perfil.</a> </li>
                           <li> <a href='miCarrito.php'class='button' >Mi Carrito.</a> </li>
                           <li> <a href='misCreaciones.php'class='button' >Mis creaciones.</a></li>
                        </ul>
                        ";
                }
            ?>
	</div>