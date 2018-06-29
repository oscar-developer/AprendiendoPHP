<?php 
	echo "<h1>Funciones Anónimas<h1/>";

	echo "<h3>Asignando una funcion y ejecutando<h3/>";
	$var2='777';

	$closure = function () use($var2){

		$Resultado = '<p>Hola Oscar</p>'.$var2;
		return $Resultado;
	};

	echo $closure();

	
	echo '<br></br>';
	echo "Otra forma de Usar una Funcion Anonima";
	echo '<br></br>';
	$x=7;
	$Arraynumbers = [1,2,3,4,5];

	$closure = function ($n) use($x){
		return $n*$x;
	};
	$x=10;
	$result = array_map($closure, $Arraynumbers);

	var_dump($result);


 ?>