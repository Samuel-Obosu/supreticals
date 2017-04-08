<?php
session_start();
include('../config.php');
$pid=$_SESSION['q'];
$recPid=$_SESSION['recPid'];
$page=$_SESSION['page'];
$dat=mysqli_date();
$fields=array();
$values=array();

foreach($_POST as $field => $value){
      // if(($value != $tbl_name) && ($value != $queryType)){
        array_push($fields, $field);
        array_push($values, $value);      // }
    }
    //echo $fields."<br>".$values;
    $sql="UPDATE lab SET ";
    for ($i=0; $i <count($fields) ; $i++) {
      if($i<count($fields)-1){
        $sql.=" $fields[$i] = '$values[$i]', ";
      }else{
        $sql.=" $fields[$i] = '$values[$i]' ";
      }
    }
     $sql.=", RecPid='$recPid', RecDate='$dat' WHERE Pid='$pid'";

     //echo $sql;
     $res=mysqli_query($connection, $sql);

     if($res){
           header('location:../findper.php?q=1');
     }else{
       header("location:../$page?p=1");
     }

?>
