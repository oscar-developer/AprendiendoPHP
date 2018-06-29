<?php 
	$a = null;



	$result = $a ?? 'default';

	var_dump($result);
	echo '<br>';



	if ($a ==null)
	{
		$result ='Si es nulo';		
	}
	else
	{
		$result ='No es nulo';
	}

	var_dump($result);
 ?>