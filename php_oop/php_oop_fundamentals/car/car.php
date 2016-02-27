<?php 
	class Car{
		public $price, $speed, $fuel, $mileage, $tax;


		public function __construct($price, $speed, $fuel, $mileage){
			$this->price = $price;
			$this->speed = $speed;
			$this->fuel = $fuel;
			$this->mileage = $mileage;
			$this->tax = 0.12;

		 if($this->price > 10000){
		 	$this->tax = 0.15;
		 }

		}

		function displayAll(){
			echo "<br />Price: $" . $this->price .
				 "<br />Speed: " . $this->speed . "mph" .
				 "<br />Fuel: " . $this->fuel .
				 "<br />Mileage: " . $this->mileage . "mpg" .
				 "<br />Tax: " . $this->tax . "<br />";
		}

	}

	$car1 = new Car(20000, 80, "Full", 40);
	$car2 = new Car(9000, 30, "Full", 30);
	$car3 = new Car(10000, 45, "Full", 20);
	$car4 = new Car(15000, 65, "Full", 15);
	$car5 = new Car(8000, 40, "Full", 45);
	$car6 = new Car(2000, 15, "Full", 10);

	$car1->displayAll();
	$car2->displayAll();
	$car3->displayAll();
	$car4->displayAll();
	$car5->displayAll();
	$car6->displayAll();

 ?>