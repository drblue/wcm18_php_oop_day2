<?php

class Horse {
	public $name;
	public $breed = "Mixed";
	public $color = "Grey";
	public $height;
	public $weight;
	public $sex = "Unknown";
	public $owners = [];

	public function __construct($name, $height, $weight) {
		$this->name = $name;
		if (is_numeric($height)) {
			$this->height = $height;
		} else {
			$this->height = -1;
		}
		if (is_numeric($weight)) {
			$this->weight = $weight;
		} else {
			$this->weight = -1;
		}
	}

	public function getBMI() {
		/**
		 * vikt i kg / längd i meter^2
		 */
		return $this->weight / pow($this->height/100, 2);
	}

	public function getInfo() {
		return "<h1>{$this->name}</h1>
			<ul>
				<li>Breed: {$this->breed}</li>
				<li>Color: {$this->color}</li>
				<li>Height: {$this->height} cm</li>
				<li>Weight: {$this->weight} kg</li>
				<li>Sex: {$this->sex}</li>
				<li>Owner: {$this->getOwners()}</li>
				<li>BMI: {$this->getBMI()}</li>
			</ul>";
	}

	public function getOwners() {
		return implode(", ", $this->owners);
	}

	public function setOwner($name) {
		array_push($this->owners, $name);
	}

}
