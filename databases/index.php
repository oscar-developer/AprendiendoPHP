<?php
	$dbHost = 'localhost';
	$dbName = 'cursophp';
	$dbUser = 'root';
	$dbPass = '';
	try {
		$pdo = new PDO("mysql:host=$dbHost; dbname=$dbName",$dbUser,"");
		$pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Databases con PLatzi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Databases</h1>
		<ul>
			<li>
				<a href="">List Users</a>
			</li>
			<li>
				<a href="">Add Users</a>
			</li>
		</ul>
	</div>	
</body>
</html>