<?php
// ------------------------------ EXAMPLE 1 --------------------------------------------------------------
class Person{
	public $firstName;
	public $lastName;
	public $gender;
	public $hairColor;

	function __construct($firstName, $lastName, $gender, $hairColor){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->hairColor = $hairColor;
	}

	function getName(){
		return $this->firstName . $this->lastName; 
	}
}

class Tom extends Person{
	function greet(){
		return $this->gender;
	}
}

class Alex extends Person{
	function hello(){
		return $this->hairColor;
	}
}

$person = new person("Tom ", " Smith", " male", "brown");

echo "Person 1 is a " . $person->getName();

// ------------------------------------- EXAMPLE 2 -----------------------------------------------------------
class Animal{
	public $color;
	public $name;
	public $gender;
	public $size;

	function __construct($color, $name, $gender, $size){
		$this->color = $color;
		$this->name = $name;
		$this->gender = $gender;
		$this->size = $size;
	}

	function hey(){
		return $this->color . "and its name is " . $this->name;
	}
}

class fish extends Animal{
	function hey2(){
		return $this->gender;
	}
}

class bird extends Animal{
	function hey3(){
		return $this->size;
	}
}

$Animal1 = new Animal("blue ", "Something ", "female ", " small");

echo "</br> The fishes color is " . $Animal1->hey();

// ----------------------------------------------- EXAMPLE 3 --------------------------------------------------------
class House{
	public $color;
	public $numberOfBedrooms;
	public $bathRooms;
	public $interiorColor;

	function __construct($color, $numberOfBedrooms, $bathRooms, $interiorColor){
		$this->color = $color;
		$this->numberOfBedrooms = $numberOfBedrooms;
		$this->bathRooms = $bathRooms;
		$this->interiorColor = $interiorColor;
	}

	function what(){
		return $this->color . " and it has " . $this->numberOfBedrooms . " bedrooms.";
	}
}
class OneHouse extends House{
	function what2(){
		return $this->bathRooms;
	}
}

class AnotherHouse extends House{
	function what3(){
		return $this->interiorColor;
	}
}

$House1 = new House("green ", 4 , 2 , "brown");

echo "</br> The houses color is " . $House1->what();