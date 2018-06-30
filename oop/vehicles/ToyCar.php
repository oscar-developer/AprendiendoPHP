<?php 
namespace Vehicles;
require_once 'VehicleBase.php';

	class ToyCar extends VehicleBase
	{
		public function move()
		{
			echo $this->StartEngine().'<br>';
			echo 'Car: moving<br>';			
		}
		public function StartEngine()
		{
			throw new \Exception('Engine not found');
									
		}

	}
 ?>