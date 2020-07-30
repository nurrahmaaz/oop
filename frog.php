<?php
require_once 'animal.php';

	class Frog extends Animal{
		public $loncat = "hop hop";

		public function jump(){
			echo $this->loncat;
		}

	}

?>