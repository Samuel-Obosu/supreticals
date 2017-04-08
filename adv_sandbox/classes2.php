<?php 
	class Person{
		function say_hello(){
			echo "Hello from inside class Person";
		}
	}

	$person = new Person();
	if (is_a($person, 'Person')) {
		echo "Yup, a person </br>";
	}
	else{
		echo "Not a person </br>";
	}
	$person -> say_hello();
?>