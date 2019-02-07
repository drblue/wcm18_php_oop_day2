<?php

require("includes/Horse.php");

$stable = [];

$horse = new Horse("Pelle", 170, 650);
$horse->breed = "Ardenner";
$horse->color = "Rosa";
$horse->sex = "Vallak";
$horse->setOwner("Adam");
$horse->setOwner("Aaron");
array_push($stable, $horse);

$horse = new Horse("Kalle", 120, 400);
$horse->breed = "C-ponny";
$horse->color = "Turkos";
$horse->sex = "Hingst";
$horse->setOwner("Bertil");
array_push($stable, $horse);

$horse = new Horse("Caesar", 60, 550);
array_push($stable, $horse);

/**
 * $stable = [
 * 	Horse,
 * 	Horse
 * ]
 */

foreach ($stable as $horse) {
	echo $horse->getInfo();
}
