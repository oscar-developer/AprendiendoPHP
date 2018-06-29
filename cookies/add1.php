<?php 
	
	$Value = $_COOKIE['count'];
	$Value++;
	setcookie('count',$Value);
	echo '<p>Adding 1</p>';
 ?>