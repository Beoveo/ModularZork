<div id="contenido">
    <div id="demo">
        <h2>Creo que estas en el calabozo y todo esta oscuro, a ver que pudes hacer!!!</h2>
					
            <p>Creo que lo tiene facil y lo único que puedes hacer es romper la ventana.</p>

		  <img src="juegoimg/calabozoOscuro.png" id="imgjuego">
		  <input type="button" onclick="changeImage()" value="Encender la luz" />
		    		
		  <script>
			   function changeImage() {
			       var image = document.getElementById('imgjuego');
			       image.src = "juegoimg/calabozocerrado.png";

						/*await sleep(2);
			        	document.getElementById('demo').style.display='none' */   
			   }

		  </script>
    </div>
</div>