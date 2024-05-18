<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Membuat instance dari Animal
$domba = new Animal("shaun");
echo "Name: " . $domba->get_nama() . "<br>";
echo "Legs: " . $domba->get_kaki() . "<br>";
echo "Cold blooded: " . $domba->get_berdarah_dingin() . "<br><br>";

// Membuat instance dari Frog
$kodok = new Frog("buduk");
echo "Name: " . $kodok->get_nama() . "<br>";
echo "Legs: " . $kodok->get_kaki() . "<br>";
echo "Cold blooded: " . $kodok->get_berdarah_dingin() . "<br>";
echo "Jump: " . $kodok->melompat() . "<br><br>";

// Membuat instance dari Ape
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->get_nama() . "<br>";
echo "Legs: " . $sungokong->get_kaki() . "<br>";
echo "Cold blooded: " . $sungokong->get_berdarah_dingin() . "<br>";
echo "Yell: " . $sungokong->berteriak() . "<br>";
?>
