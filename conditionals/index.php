<?php 
	$a='0';
	if($a==1)
	{
		echo "es el numero 1";
	}
	else if($a==0){
		echo "es el numero cero";
	}
	else
	{
		echo "es un numero diferente a 1 y cero";
	}
	echo "<br>";
	echo "<br>";

	switch ($a) {
		case '1':
			echo "es el nro 1";
			break;
		case '2':
			echo "es el nro 2";
			break;
		case '3':
			echo "es el nro 3";
			break;
		
		default:
			echo "es un numero diferente a 1,2,3";
			break;
	}

 ?>