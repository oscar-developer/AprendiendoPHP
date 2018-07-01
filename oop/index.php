<?php 
	include 'vehicles/Car.php';
	include 'vehicles/Truck.php';
	include 'vehicles/ToyCar.php';
	
	// use Vehicles\Car;
	// use Vehicles\Truck;
	use Vehicles\{Car,Truck,ToyCar};
	
	try 
	{
		echo 'CLASS ToyCar <br>';
		$Toycar = new ToyCar('Mercedes');
		$Toycar->move();
		
	} catch (Exception $e) 
	{
		$msn =$e->getMessage();
		echo 'this is a toy '.$msn.'<br><br>';		
		// log...
	}
	finally
	{
		echo "finally <br><br>";

	}




	echo 'CLASS Car <br>';
	$car = new Car('Mercedes');
	$car->move();

	echo $car->getpos().'<br>';

	echo 'Owner car: '.$car->getOwner().'<br>';

	

	echo '<br>CLASS Truck1 <br>';	
	$Truck1 = new Truck('Silvia','Pickup');	
	$Truck1->move();
	echo 'Owner truck: '.$Truck1->getOwner().'<br>';

	echo "<br>";
	echo "<br>";
	echo '<br>CLASS Truck2 <br>';	
	$Truck2 = new Truck('Silvia','Pickup');
	$Truck2->move();

	echo '<br> Total Trucks: '.Truck::getTotal().'<br>';

	// $Vehic = new Vehicles\VehicleBase('Hered');  no es posible instanciar o crearobjetos de clases abstractas


	// Aplicaccion de Serializacion
	$ser = serialize($car);

	$newCar = unserialize($ser);

	echo 'NewCar Owner: '. $newCar->getOwner().'<br>';	



 ?>