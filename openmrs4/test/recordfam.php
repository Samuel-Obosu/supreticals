<?php
  include ('../config.php');
  $famRel=$_GET['rel'];
  $famAge=$_GET['age'];
  $famStat=$_GET['stat'];

  $sql="INSERT INTO familyinfo(Pid, Relation, Age, Status)
      VALUES('1','$famRel', '$famAge','$famStat')";

  $info=mysqli_query($connection, $sql);
  if($info){
    echo "Record Saved Succcessfully";
  }else{
    echo "Failed to Save Record";
  }
  freeResult($info);
?>
