<?php

echo "-----------------		Ciclo while  --------";
	echo "<br>";

	$Total = 15;
	$i=1;
	while($i<$Total && ($i*10<=100))
	{
		echo "Nro: ".$i;
		$i++;
	}

	echo "<br>";
	echo "------------------  Ciclo For  --------";
	echo "<br>";

	for($i=0;$i<$Total;$i++)
	{
		echo "Nro for: ".$i;

	}

	echo "<br>";
	echo "------------------  Ciclo ForEach  --------";
	echo "<br>";

	$aray1 = ['Juan','Oscar','Silvia','Hilda'];

	foreach ($aray1 as $name) {
		echo $name;
		echo "<br>";
	}

	echo "------------------  Ciclo ForEach  --------";
	echo "<br>";
	
	foreach ($aray1 as $key => $name) {
		echo $key.': '.$name;
		echo "<br>";
	}
 ?>	