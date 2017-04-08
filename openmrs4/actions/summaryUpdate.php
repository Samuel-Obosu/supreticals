<?php session_start();
include('../config.php');

$pid=$_SESSION['q'];
$recPid=$_SESSION['recPid'];
$page=$_SESSION['page'];
$date=mysqli_date();

//checking the previous record for columns with Yes
$sql="SELECT * FROM summary WHERE PId='{$pid}'";
$data=mysqli_query($connection, $sql);
$row=array();
$yesFields=array();
if(mysqli_num_rows($data)==1){
		$row=mysqli_fetch_array($data, MYSQLI_ASSOC);
}

foreach ($row as $key => $value) {
	if (stristr($value, "Yes")) {
		$yesFields[$key]="{$value}'";
	}
}


$sql= "UPDATE summary SET ";
foreach($_POST as $field => $value){
				$f=mysqli_real_escape_string($connection,$field);
				$v=mysqli_real_escape_string($connection,$value);
				$sql.="{$f} = '{$v}',";
			}

//for fields that are unchecked
foreach ($yesFields as $key => $value) {
			if(!array_key_exists($key, $_POST)){
				$sql.="$key= 'NULL',";
			}
}
				//inserting into the database
			$sql.="RecPid='$recPid', RecDate='$date'  WHERE PId='{$pid}'";
			//echo $sql;
      $data=mysqli_query($connection, $sql);

      if($data){
            header('location:../findper.php?q=1');
      }else{
            header("location:../{$page}?err=1");
      }
?>
