<?php 
$v1 =10;
$v2=12;

$v1 =10;
$v2 ='10';
echo $v1+$v2;
echo '<br>';

var_dump( $v1.$v2);
echo '<br>';




$result = $v1 ==$v2;
if($v1 !==$v2)
{
	echo 'Correcto NO son iguales';	
	
}
else
{
	echo 'Correcto son iguales';
}
echo '<br>';
var_dump($result);

 ?>