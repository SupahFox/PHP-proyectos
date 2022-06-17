<!DOCTYPE html>
<html lang="es">
<head>
	<title> Variables </title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.encabezado {
			color: #2C3E50;
			background-color: #D7BDE2;
			padding: 5px;
		}
	</style>
</head>
<body>
	<div class="encabezado">
	<h1>Practica 3 - Constantes</h1>
	<hr>
		<?php
		// Las constantes no varian su contenido
			define('nombre', 'Elmer');
			define('edad', 25);
			echo '<h4>Bienvenida: '.nombre.' '.edad.'</h4>';
		?>
	</div>
	
	<h1>Constantes predefinidas</h1>
		<?php
			echo PHP_OS.'<br>';  // IMPRIME EL SISTEMA OPERATIVO QUE ESTAMOS UTILIZANDO
			echo PHP_VERSION.'<br>';
			echo __LINE__.'<br>'; 
			echo __FILE__.'<br>'; // ruta completa del archivo
		?>
	<address>
		https://www.php.net/manual/es/language.constants.predefined.php
	</address>
</body>
</html>
