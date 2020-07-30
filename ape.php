<?php
require_once 'animal.php';

	class Ape extends Animal{
		public $suara = "auoooo";
	
	public function yell(){
		echo $this->suara;
	}
		

}




//	class Frog extends Animal{

//	}


//$sungokong = new Ape("kera sakti");
//$sungokong->yell() // "Auooo"

//$kodok = new Frog("buduk");
// $kodok->jump() ; // "hop hop"
?>