<?php 
namespace Vehicles;
require_once 'VehicleBase.php';

	class Car extends VehicleBase implements \Serializable
	{
		public function move()
		{
			echo 'Car: moving<br>';			
		}
		public function StartEngine()
		{
			return 'car: start Engine';			
		}
		

		// Funcion Serializable
		public function serialize()
		{
			echo 'Serializable <br>';
			return $this->owner;
		}
		public function unserialize($serialized)
		{
			echo 'unserialize <br>';
			$this->owner = $serialized;
		}

	}
 ?>