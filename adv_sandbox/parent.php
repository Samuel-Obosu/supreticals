<?php 
	class A{
		static $variable= "Hello";

		static function hello(){
			echo self::$variable;
		}
	}

	class B extends A{

		static function hello(){
			echo "*****";
			parent::hello();
			echo "*****";
		}
	}

	B::hello();
 ?>