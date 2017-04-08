<?php 
	class Example{
		public $a = 1;
		private $b = 2;
		protected $c = 3;

		function showvar(){
			return $this->c;
		}
	}

	$example1 = new Example();
	echo $example1->showvar();
 ?>