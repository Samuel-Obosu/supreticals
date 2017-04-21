<?php
session_start();
require("../config.php");
setlocale(LC_ALL,'en_US.UTF-8');
$fileName="";
$filedir="../uploads";
$pid=$_SESSION['q'];
$recPid=$_SESSION['recPid'];
$date=strftime('%Y-%m-%d %H:%M:%S', time());
$page=$_SESSION['page'];

if(isset($_POST["submit"])){
	$test=$_POST['test'];
	$tmp=$_FILES["upload"]["name"];
  // $pid=$_POST['pid'];
	$fileInfo = pathinfo($_FILES["upload"]["name"]);

	 if (($_FILES["upload"]["type"]=="image/jpeg")||($_FILES["upload"]["type"]=="image/gif")||
			 ($_FILES["upload"]["type"]=="image/jpg")||($_FILES["upload"]["type"]=="image/pjpeg")||
			 ($_FILES["upload"]["type"]=="image/x-png")||($_FILES["upload"]["type"]=="image/png")) {
			//echo "image";
			//image file
			//$fileName=$_FILES["upload"]["name"];
			$ext=$fileInfo['extension'];
			$fileName="{$test}_{$pid}.$ext";
			$query = "INSERT INTO labresults(Test, Pid, fileName, RecPid, RecDate)
								VALUES ('$test', '$pid', '$fileName','$recPid', '$date' )";
	}else if (($_FILES["upload"]["type"]=="application/pdf")||($_FILES["upload"]["type"]=='application/msword')
					||($_FILES["upload"]["type"]=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')){
		//echo "PDF file";
		//pdf
		//$fileName=$_FILES["upload"]["name"];
		$ext=$fileInfo['extension'];
		$fileName="{$test}_{$pid}.$ext";
		$query = "INSERT INTO labresults(Test, Pid, fileName, RecPid, RecDate)
							VALUES ('$test', '$pid', '$fileName','$recPid', '$date' )";

	}else{
		$stat=2;
	 	header("location:../{$page}?q={$pid}&stat={$stat}");
 	}

	$uploadpath="{$filedir}/{$fileName}";
	//echo $uploadpath;
		if (move_uploaded_file($_FILES["upload"]["tmp_name"], $uploadpath)) {
			//echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
			$data=mysqli_query($connection, $query);

				if($data){
					$sql="UPDATE lab SET {$test}='UPLOADED' WHERE Pid='$pid'";
					$res=mysqli_query($connection, $sql);
					if($res){
						$stat=1;
						header("location:../{$page}?q={$pid}&stat={$stat}");
					}
				}else{
					//echo $query;
					$stat=2;
				header("location:../{$page}?q={$pid}&stat={$stat}");
				}
			} else {
			//echo "Sorry, there was an error uploading your file.";
				$stat=2;
				header("location:../$page?q={$pid}&stat={$stat}");
			}
}
?>
