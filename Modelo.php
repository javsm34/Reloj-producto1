<?php
	// Modelo.php 
	class Modelo {	// Reloj
		public $ancho, $alto;
		public $centrox, $centroy, $radio;
		public $arrayout, $arrayin;
		public $hora, $min, $seg;
		public function __construct($h, $m, $s, $ancho, $alto){
			$this->hora = $h;
			$this->min = $m;
			$this->seg = $s;
			$this->ancho = $ancho;
			$this->alto = $alto;
			$this->centrox = $ancho/2;
			$this->centroy = $alto/2;
			$this->radio = $ancho/2-30;
			$this->arrayout = Array();
			$this->arrayin = Array();
			$anguloini = 0;		
			$angulodiv = (2*M_PI)/60;
			$anguloflecha = 10;
			for($i=0; $i<60; $i++){
				$this->arrayout[$i] = 
					new Punto(
				$this->centrox+$this->radio*cos($anguloini),
				$this->centroy+$this->radio*sin($anguloini) 
					);
				$this->arrayin[$i] = 
					new Punto(
				$this->centrox+($this->radio-10)*cos($anguloini),
				$this->centroy+($this->radio-10)*sin($anguloini) 
					);
				$anguloini += $angulodiv; 
			}			
		}
	}
?>