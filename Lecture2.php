<?php
//---------------------------------------------------------- Lecture 2 ----------------------------------------------------------
//Example1
class Person{
	public $firstName;
	public $lastName;

		function __construct($firstName, $lastName) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}

		function getName() {
			return $this->firstName . $this->lastName;
		}
}

class Cat{
	public $Name;
	public $lastName;
	public $breed;

		function __construct($Name, $lastName, $breed) {
			$this->firstName = $Name;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

		function getName() {
			return $this->firstName . $this->lastName;
		}
}

class Car{
	public $Name;
	public $model;

		function __construct($firstName, $model) {
			$this->firstName = $firstName;
			$this->model = $model;
		}

	function getName() {
			return $this->firstName . $this->model;
		}
}

//Example 2
$person1 = new person("paola", " gonzalez");
echo "Hello my name is " . $person1->getName();

$cat1 = new Cat("mittens ", "kitty ", "cat");
echo "<br>This is " . $cat1->getName();

$car1 = new Car("car", "model");
echo "<br>This is a " . $car1->getName();