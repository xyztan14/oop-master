<?php

require_once("Animal.php");
require_once("Frog.php");
require_once("Ape.php");

$animal = new Animal("Shaun");
echo "Name : ".$animal->name ."<br>";
echo "Legs : ".$animal->legs ."<br>";
echo "Cold-Blooded : ".$animal->cold_blooded ."<br><br>";

$frog = new Frog("Buduk");
echo "Name : ".$frog->name ."<br>";
echo "Legs : ".$frog->legs ."<br>";
echo "Cold Blooded : ".$frog->cold_blooded ."<br>";
echo "Jump : ".$frog->jump ."<br><br>";

$ape = new Ape("Kera Sakti");
echo "Name : ".$ape->name ."<br>";
echo "Legs : ".$ape->legs ."<br>";
echo "Cold Blooded : ".$ape->cold_blooded ."<br>";
echo "Yell : ".$ape->yell ."<br><br>";

?>