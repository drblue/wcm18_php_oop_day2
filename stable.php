<?php

require("includes/Horse.php");

$stable = [];

$horse = new Horse;
$horse->name = "Pelle";
$horse->breed = "Ardenner";
$horse->color = "Rosa";
$horse->height = 170;
$horse->weight = 600;
$horse->sex = "Vallak";
$horse->setOwner("Adam");
array_push($stable, $horse);

$horse = new Horse;
$horse->name = "Kalle";
$horse->breed = "C-ponny";
$horse->color = "Turkos";
$horse->height = 120;
$horse->weight = 400;
$horse->sex = "Hingst";
$horse->setOwner("Bertil");
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
