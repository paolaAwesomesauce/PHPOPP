<?php
// ------------------------------ EXAMPLE 1 --------------------------------------------------------------
class Person{
	public $firstName;
	public $lastName;
	//public $gender;
	//public $hairColor;

	function __construct($firstName, $lastName){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	function getName(){
		return $this->firstName . $this->lastName; 
	}
}

class Tom extends Person{
	function __construct($firstName, $lastName, $gender){
		parent::__construct($firstName, $lastName);

	$this->gender = $gender;
	}

	function greet(){
		return "and is a " . $this->gender;
	}
}

class hair extends Person{
	function __construct($firstName, $lastName, $hairColor){
		parent::__construct($firstName, $lastName);

	$this->hairColor = $hairColor;
	}
	function hello(){
		return " and has " . $this->hairColor . " hair";
	}
}

$person = new person("Tom ", "Smith", "male " , "brown");


echo "Person 1 is " . $person->getName();

// ------------------------------------- EXAMPLE 2 -----------------------------------------------------------
class Animal{
	public $color;
	public $name;
	//public $gender;
	//public $size;

	function __construct($color, $name){
		$this->color = $color;
		$this->name = $name;
	}

	function hey(){
		return $this->color . "and its name is " . $this->name;
	}
}

class fish extends Animal{
	function __construct($color, $name, $gender){
		parent::__construct($color, $name);
		
		$this->gender = $gender;
		
	}

	function hey2(){
		return $this->gender;
	}
}

class bird extends Animal{
	function __construct($color, $name, $size){
		parent::__construct($firstName, $lastName);
	
		$this->size = $size;
	}

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
	//public $bathRooms;
	//public $interiorColor;

	function __construct($color, $numberOfBedrooms){
		$this->color = $color;
		$this->numberOfBedrooms = $numberOfBedrooms;
	}

	function what(){
		return $this->color . " and it has " . $this->numberOfBedrooms . " bedrooms.";
	}
}
class OneHouse extends House{
	function __construct($color, $numberOfBedrooms, $bathRooms){
		parent::__construct($color, $numberOfBedrooms);
			
		$this->bathRooms = $bathRooms;
	}

	function what2(){
		return $this->bathRooms;
	}
}

class AnotherHouse extends House{
	function __construct($color, $numberOfBedrooms, $interiorColor){
		parent::__construct($color, $numberOfBedrooms);
		
		$this->interiorColor = $interiorColor;
	}

	function what3(){
		return $this->interiorColor;
	}
}

$House1 = new House("green ", 4 , 2 , "brown");

echo "</br> The houses color is " . $House1->what();