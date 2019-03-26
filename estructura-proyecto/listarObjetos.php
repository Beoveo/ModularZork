<?php	
	function listado_objetos(){
		$html = '<ul class=listObj>';
		$html .= listado_objetosRecursivo();
		$html .= '</ul>';
		return $html;
	}

	function listado_objetosRecursivo(){
		$html = '';
		$items = "SELECT * FROM objetos";//Acceder a la base de datos y leer todos los objetos de tipo
		foreach($items as $item) {
			$html .= '<li class="item">'.$item->nombre . $item->precio; //imagen, nombre y precio
			$html .= '</li>';
		}
		return $html;
	}
?>