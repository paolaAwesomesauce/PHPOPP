<?php
	class Person{
		public $FirstName;
		public $LastName;
		public $school;

		function __construct($FirstName, $LastName, $school){
			$this->FirstName = $FirstName;
			$this->LastName = $LastName;
			$this->school = $school;
		}


		function greeting(){
			return "Hello my name is " . $this->FirstName . $this->LastName . "and I got to " . $this->school;
		}
	}

	$paola = new Person("paola ", "gonzalez ", "Pasadena High School");

	echo $paola->greeting();
	?>