<?php 
	class Car{
		var $doors = 4;
		var $wheels =4;

		function doors_wheels(){
			return $this->doors + $this->wheels;
		}
	}

	class CompactCar extends Car{
		var $doors= 2;
	}

	$car1 = new Car();
	echo $car1->doors."</br>";
	echo $car1->wheels."</br>";
	echo $car1->doors_wheels()."</br>";
	echo "<hr>";

	$car2 = new CompactCar();
	echo $car2->doors."<br>";
	echo $car2->wheels."</br>";
	echo $car2->doors_wheels()."</br>";
?>