<?php 
	Class GetterSetter{
		private $variable = 1;

		function getter(){
			return $this->variable;
		}

		function setter($newvalue){
			$this->variable =$newvalue;
		}
	}

	$getterSetter = new GetterSetter();
	echo "Before: ". $getterSetter->getter()."</br>";

	$getterSetter->setter(5);

	echo "After: ". $getterSetter->getter();

 ?>