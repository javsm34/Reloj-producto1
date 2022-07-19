<?php
	// http://localhost/reloj/index.php?h=9&m=25&s=10
	header("Content-type: Reloj");
	require_once("Punto.php");
	require_once("Modelo.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	$v = new Vista();
	$ancho = 400;
	$alto = 400;
	$m = new Modelo($_GET['h'], $_GET['m'], $_GET['s'], $ancho, $alto);
	$c = new Controlador();
	$c->mostrar($m, $v); 
?>