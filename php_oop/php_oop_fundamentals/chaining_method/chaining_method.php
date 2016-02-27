<?php 
	
	class Bike{
		public $price, $max_speed, $miles;

		public function __construct($price, $max_speed){
			$this->price = $price;
			$this->max_speed = $max_speed;
			$this->miles = 0;
		}

		//display_info function begin
		function display_info(){
			echo "<br />Price: " . $this->price.
				"<br />Max Speed: " . $this->max_speed.
				"<br />Miles: " . $this->miles . "<br />";
				return $this;
		}

		function drive(){
			$this->miles = $this->miles + 10;
			echo "<br />Driving!";
			return $this;
		}

		function reverse(){
			$this->miles = $this->miles - 5;
			echo "<br />Reversing!";

			if($this->miles < 0){
				$this->miles = 0;
			}
			return $this;
		}
	}


	$bike_1 = new Bike(300, "20mph");

	$bike_1->drive()->drive()->drive()->reverse()->display_info();
	// $bike_1->drive();
	// $bike_1->drive();
	// $bike_1->reverse();
	// $bike_1->display_info();

	$bike_2 = new Bike(250, "30mph");
	$bike_2->drive()->drive()->reverse()->reverse()->display_info();
	// $bike_2->drive();
	// $bike_2->drive();
	// $bike_2->reverse();
	// $bike_2->reverse();
	// $bike_2->display_info();

	$bike_3 = new Bike(400, "40mph");
	$bike_3->reverse()->reverse()->reverse()->display_info();
	// $bike_3->reverse();
	// $bike_3->reverse();
	// $bike_3->reverse();
	// $bike_3->display_info();

 ?>