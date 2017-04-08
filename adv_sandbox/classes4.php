<?php 
	class Person{

		var $firstname;
		var $lastname;

		var $armcount =2;
		var $legcount =2;

		function full_name(){
			echo $this ->firstname." ". $this->lastname;
		}
	}
	$person = new Person();
	echo $person ->armcount."</br>";
	$person ->firstname = "Antonio";
	$person ->lastname ="Conte";

	$new_person = new Person();
	$new_person ->firstname= "Pep";
	$new_person ->lastname="Guardiola";

	$person ->full_name()."</br>";
	$new_person ->full_name();
?>