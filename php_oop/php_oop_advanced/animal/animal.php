<?php
	
	class Animal{
		public $health, $name;

		public function __construct($name){
			$this->health = 100;
			$this->name = $name;
		}


		function displayHealth(){
			echo "<br />Name: " . $this->name .
				 "<br />Health: " . $this->health . "<br />";
		}

		function walk(){
			$this->health = $this->health - 1;
			return $this;
		}

		function run(){
			$this->health = $this->health -5;
			return $this;
		}

	} 

	class Dog extends Animal{
		public function __construct($name){
			parent::__construct($name);
			$this->health = 150;
		}
		function pet(){
			$this->health = $this->health + 5;
			return $this;
		}
	}

	class Dragon extends Animal{
		public function __construct($name){
			parent::__construct($name);
			$this->health = 170;
		}
		function fly(){
			$this->health = $this->health - 10;
			return $this;
		}
	}


$animal = new Animal("Bob");
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$spot = new Dog("Spot");
$spot->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$smaug = new Dragon("Smaug");
$smaug->walk()->walk()->walk()->run()->run()->fly()->displayHealth();
 ?>