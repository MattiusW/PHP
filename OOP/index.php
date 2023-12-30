<?php

include "Person.php";

$p1 = new Person();
$p2 = new Person();

$p1->setName("Mateusz");
$p1->setAge(30);
$p1->setProfession("Programist");

$p2->setName("Krzysiu");
$p2->setAge(32);
$p2->setProfession("FoodBoy");

$p1->printPerson();
echo"<br>";
$p2->printPerson();

?>