<!DOCTYPE html>
<html lang="es">
<head>
	<title> Variables </title>
</head>
<body>
	<h1>Practica 2 - Variables</h1>
	<?php
		/*Php es un lenguaje debilmente tipado*/
		$nombre = "Natalia";
		$apellido = "Torres";
		$edad = 25;
		$edad = 24; // Sobreescribe la variable
		echo 'Hola '. $nombre .' como estas?';
		echo '<h3>Tu apellido es '.$apellido.'</h3>';
		echo 'Este anio cumpliste '.$edad;
	?> 
	<h2>Tipos de Datos</h2>
	<?php
		echo '<ul>'
			  .'<li>Entero</li>'
			  .'<li>Coma Flotante</li>'
			  .'<li>Cadenas de caracteres</li>'
			  .'<li>Boolean</li>'
			  .'<li>null</li>'
			  .'<li>Array: Coleccion de datos</li>'
			  .'<li>Objetos</li>'
			  .'</ul>';

		echo '<br/>Cual es el tipo de dato de edad: '. gettype($edad);
	?>
</body>
</html>
