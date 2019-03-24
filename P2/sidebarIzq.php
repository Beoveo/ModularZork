<div id="sidebar-left">
	<?php require_once("menuSideBarIzq.php"); ?>
	<div id="grid"> <!-- https://codepen.io/cssgrid/pen/kkqqBk -->
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