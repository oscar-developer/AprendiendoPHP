<?php 
	include 'vehicles/Car.php';
	include 'vehicles/Truck.php';
	
	// use Vehicles\Car;
	// use Vehicles\Truck;
	use Vehicles\{Car,Truck};
	

	echo 'CLASS Car <br>';
	$car = new Car('Mercedes');
	$car->move();
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
	



 ?>