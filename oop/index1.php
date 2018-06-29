<?php 
	class Car
	{
		//Atributos
		private $owner='Oscar';
		
		/******Constructores***********/
		
		public function __construct($owner)
		{
			$this->owner = $owner;
			echo 'construct <br>';
		}
		public function __destruct()
		{
			// se ejecuta cuando se deja de usar la clase Car o Para liberar recursos
			echo 'destruct <br>';			
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


	echo 'Clas Car <br>';
	$car = new Car('Mercedes');
	$car2 = new Car('Silvia');
	// $car = new Car();
	// $car2 = new Car();

	$car->move();


	//$car->owner = 'Abel';//siempre en cuando el atributo sea publico

	// $car->setOwner('Marco');
	// $car2->setOwner('Abel');

	echo 'Owner car: '.$car->getOwner().'<br>';
	echo 'Owner car2: '.$car2->getOwner().'<br>';

 ?>