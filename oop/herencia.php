<?php 
	
	class Vehiculo
	{
		//Atributos
		protected $owner;
		
		/******Constructores***********/
		
		public function __construct($owner)
		{
			$this->owner = $owner;
			echo 'construct <br>';
		}		

		//getters y setters
		public function getOwner(){
			return $this->owner;
		}
		public function setOwner($Name){
			$this->owner = $Name;
		}

		
		//Metodos
		public function move()
		{
			echo 'moving <br>';
		}
	}
	class Car extends Vehiculo
	{
		public function move()
		{
			echo 'Car: moving<br>';			
		}
	}
	/**
	 * 
	 */
	class Truck extends Vehiculo
	{
		private $type;
		public function __construct($ownerName,$type)
		{			
			// parent::__construct($ownerName);
			$this->owner = $ownerName; 
			$this->type=$type;
		}
		public function move()
		{
			echo 'Truck-'.$this->type.': moving<br>';	
		}
		
	}


	echo 'CLASS Car <br>';
	$car = new Car('Mercedes');
	$car->move();
	echo 'Owner car: '.$car->getOwner().'<br>';
	

	echo '<br>CLASS Truck <br>';	
	$Truck = new Truck('Silvia','Pickup');	
	$Truck->move();
	echo 'Owner truck: '.$Truck->getOwner().'<br>';

 ?>