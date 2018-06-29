<?php
	$arrayVar =['red','blue','black'];
	
	$arrayVarOther = [
		0=> '56',
		1=> '34',
		2=> 'green',
		'Numero2'=> '459'
	];

	//var_dump($arrayVarOther['Numero2']);
echo $arrayVarOther[0]+$arrayVarOther[1]+$arrayVarOther['Numero2'];
?>