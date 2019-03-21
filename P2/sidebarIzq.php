<div id="sidebar-left">

	<h3>Navegación</h3>

	<!-- La idea es hacer un grid 4x6-->
	<div class="grid"> <!-- https://codepen.io/cssgrid/pen/kkqqBk -->
		<ul class="list">
			<!-- por cada elemento creamos 1 list-item -->
			<?php 
				for($i = 0; $i < 10; $i++){
					require("incluirObjetos.php");
				}
			?>
		</ul>
	</div>
</div>
