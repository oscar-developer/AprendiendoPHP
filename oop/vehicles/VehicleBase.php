<?php 
	
namespace Vehicles;
	 abstract class VehicleBase
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
			echo $this->StartEngine();//Agregando fucionalidad al metodo abstracto
			echo 'moving <br>';
		}



		public abstract function StartEngine();
		
	}
 ?>