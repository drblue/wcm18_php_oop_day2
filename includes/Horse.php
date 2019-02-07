<?php

class Horse {
	public $name;
	public $breed;
	public $color;
	public $height;
	public $weight;
	public $sex;
	public $owner;

	public function getInfo() {
		return "<h1>{$this->name}</h1>
			<ul>
				<li>Breed: {$this->breed}</li>
				<li>Color: {$this->color}</li>
				<li>Height: {$this->height} cm</li>
				<li>Weight: {$this->weight} kg</li>
				<li>Sex: {$this->sex}</li>
				<li>Owner: {$this->getOwner()}</li>
			</ul>";
	}

	public function getOwner() {
		return $this->owner;
	}

	public function setOwner($name) {
		if (!$this->owner) {
			$this->owner = $name;
		}
	}

}
