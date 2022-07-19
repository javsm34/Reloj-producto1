<?php
	// Controlador.php
	class Controlador {
		public function mostrar($modelo, $vista){
			$vista->dibujarReloj($modelo);
		}
	}
?>