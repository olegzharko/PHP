<?php

class Car {
	public $color = 'White';
	// public $speed;
	// public $fuel;
	// public $brand;

	public function __construct($brand = 'VW', $speed = 100, $fuel = 8, $color = 'Red')
	{
		$this->brand = $brand;
		$this->speed = $speed;
		$this->color = $color;
		$this->fuel  = $fuel;
	}

	public function tripTime($distance)
	{
		$time = $distance / $this->speed;
		return $time;
	}
}

$car1 = new Car('Audi', 110, 12, 'Yellow');
$car3 = new Car('BMW', 200, 12, 'Yellow');
$car2 = new Car;


// echo '<br>Car 1 time:' . $car1->tripTime(1000);
echo '<br>Car 1 time:' . $car1->tripTime(1000);
echo '<br>Car 3 time:' . $car3->tripTime(1000);
echo '<br>Car 2 time:' . $car2->tripTime(1000);