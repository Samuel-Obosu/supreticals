<?php
include('../config.php');
$mfiId=$_POST['mfiId'];

$sql="SELECT * FROM patientbios WHERE MfiId={$mfiId} LIMIT 1";
// echo $sql;
$results=mysqli_query($connection, $sql);

if($results){
  $data=mysqli_fetch_assoc($results);
  $pid=$data['PId'];
  header("location:../view.php?q={$pid}");
}else{
  header("location:../findper.php?q=2");
}

?>
