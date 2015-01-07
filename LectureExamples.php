<?php
//------------------------------------------------- Lecture 1 -----------------------------------------
//Example 1 

class paola{
	//class body
}

class app{
	//class body
}

class math{
	//class body
}

//Example 2 
$paola1 = new Paola();

$paola2 = new Paola();

$paola3 = new Paola();

//Example 3
class paola{
	public $firstName = “paola”;
	public $lastName = “gonzalez”;
	public $gender = “female”;

	function getName() {
		return “{$this>
		firstName}” .
		“{$this>
		lastName}”;
	}
}

$paola2 = Paola();
$paola1>
firstName = “paola”;
$paola1>
lastName = “gonzalez”;

class something else{
	public $firstName = “paola”;
	public $lastName = “gonzalez”;
	public $gender = “female”;

	function getName() {
		return “{$this>
		firstName}” .
		“{$this>
		lastName}”;
	}
}

$paola2 = Paola();
$paola1>
firstName = “paola”;
$paola1>
lastName = “gonzalez”;

class aniother class{
	public $firstName = “paola”;
	public $lastName = “gonzalez”;
	public $gender = “female”;

	function getName() {
		return “{$this>
		firstName}” .
		“{$this>
		lastName}”;
	}
}

$paola2 = Paola();
$paola1>
firstName = “paola”;
$paola1>
lastName = “gonzalez”;


//---------------------------------------------------------- Lecture 2 ----------------------------------------------------------

//Example1
class Paola{
	public $firstName;
	public $lastName;

		function __construct($firstName, $lastName) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}

	function getName() {
			return "{$this->firstName}" .
			"{$this->lastName}";
		}
}

class cat{
	public $firstName;
	public $lastName;
	public $breed;

		function __construct($firstName, $lastName, $breed) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

	function getName() {
			return "{$this->firstName}" .
			"{$this->lastName}";
		}
}

class car{
	public $firstName;
	public $lastName;
	public $model;

		function __construct($firstName, $lastName, $model) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->model = $model;
		}

	function getName() {
			return "{$this->firstName}" .
			"{$this->lastName}";
		}
}

//Example 2
$paola1 = new Paola("paola", "gonzalez");
print Paola 1: {$paola1->getName()};

$cat1 = new Cat("firstName", "lastName", "breed");
print Cat 1: {$cat1->getName()};

$car1 = new Car("firstName", "lastName", "model");
print Car 1: {$car1->getName()};