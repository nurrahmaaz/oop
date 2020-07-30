<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal ("shaun", 2, false);
echo "Nama  : " .$sheep->get_name() . "<br>";
echo "Kakinya ada : " .$sheep->get_kaki(). "<br>";
echo "Berdarah dingin ? :  " .$sheep->get_darah(). "<br>";

echo "<br>";
$sungokong = new Ape ("Kera sakti", 2, true) ;
echo "Nama  : " . $sungokong->get_name(). "<br>";
echo "kakinya ada  : " .$sungokong->get_kaki(). "<br>";
echo " .. suaranya ".$sungokong->yell()."<br>";

echo "<br>";
$kodok = new Frog ("buduk", 4, true);
echo "Nama  : " . $kodok->get_name(). "<br>";
echo " ....loncatannya".$kodok->jump() ; // "hop hop"


//echo $sheep->name; // "shaun"
//echo $sheep->legs; // 2
//echo $sheep->cold_blooded // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
//$sungokong = new Ape("kera sakti");
//$sungokong->yell() // "Auooo"

//$kodok = new Frog("buduk");
// $kodok->jump() ; // "hop hop"
?>