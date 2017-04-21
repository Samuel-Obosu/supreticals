<?php
	$page=$_GET['page'];

	switch ($page) {
				
		case 'home':
			$view='forms/home.php';
			$class0='active';
			break;

		case 'pid':
			$view='forms/part1.php';
			$class1='active';
			break;

		case 'phh':
			$view='forms/part2.php';
			$class2='active';
			break;

		case 'chs':
			$view='forms/part3.php';
			$class3='active';
			break;
		
		case 'upf':
			$view='forms/uploading.php';
			$class4='active';
			break;
		
		default:
			$view='forms/home.php';
			$class0='active';
			break;
	}
?>