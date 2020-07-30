<?php
// class menampung 

	class Animal{
	//properti
		public $name ;
		public $legs;
		public $coldblooded ;

		//konstruktornya
		public function __construct($name, $legs, $coldblooded){
			$this->name = $name;
			$this->legs = $legs;
			$this->coldblooded = $coldblooded;
		}

		//metode get
		public function set_name($name){
			$this->name = $name;
		}

		public function get_name(){
			return $this->name;
		}

		public function set_kaki($legs){
			$this->legs = $legs;
		}

		public function get_kaki(){
			return $this->legs;
		}

		public function set_darah($coldblooded){
			$this->coldblooded = $coldblooded;
		}

		public function get_darah(){
			return $this->coldblooded;
		}
}

	





	//$sheep = new Animal;
	//$sheep->set_name("shaun");
	//echo "namanya ..." .$sheep->get_name();

	
?>