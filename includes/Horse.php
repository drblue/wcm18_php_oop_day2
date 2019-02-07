<?php

class Horse {
	public $name;
	public $breed;
	public $color;
	public $height;
	public $weight;
	public $sex;
	public $owners = [];

	public function getInfo() {
		return "<h1>{$this->name}</h1>
			<ul>
				<li>Breed: {$this->breed}</li>
				<li>Color: {$this->color}</li>
				<li>Height: {$this->height} cm</li>
				<li>Weight: {$this->weight} kg</li>
				<li>Sex: {$this->sex}</li>
				<li>Owner: {$this->getOwners()}</li>
			</ul>";
	}

	public function getOwners() {
		return implode(", ", $this->owners);
	}

	public function setOwner($name) {
		array_push($this->owners, $name);
	}

}
