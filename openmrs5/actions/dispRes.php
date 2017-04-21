<?php
	$file=$_GET['file'];
	if(substr($file, -4)=='docx'){
		$report="https://docs.google.com/viewer?url=www.prijonel.com/uploads/reports/../uploads/{$file}&embedded=true' frameborder='0'></iframe>";
	}
	$report="reports/../uploads/".$_GET['file'];

	//echo "<iframe src=\"reports/$report\"  style='width: 100%; height:100%;' ></iframe>";
	echo "<iframe src=\"$report\"  style='width: 800px; height:800px;' ></iframe>";
?>
