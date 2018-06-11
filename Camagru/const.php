<?php

class Car {
	const WHEELS = 4;

	public function test() {
		echo this->color;
		echo '<br>';
		echo self::WHEELS;
	}
}

class Bicycle {
	const WHEELS = 2;
	public function test() {
		echo Car::WHEELS;
		echo self::WHEELS;
	}
}



$b = new Bicycle;
$b->test();

$car1 = new Car;
$car1->color = 'White';
$car1->test();

