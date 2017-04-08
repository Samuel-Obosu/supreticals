<?php
  session_start()
  include ('../config.php');
  $famRel=$_GET['rel'];
  $famAge=$_GET['age'];
  $famStat=$_GET['stat'];
  $pid=$_SESSION['q'];

  $sql="INSERT INTO familyinfo(Pid, Relation, Age, Status)
      VALUES('$pid','$famRel', '$famAge','$famStat')";

  $info=mysqli_query($connection, $sql);
  if($info){
    echo "<div class='alert alert-success'>Family Record Saved Succcessfully</div>";
  }else{
    echo "<div class='alert alert-success'>Failed to Save Record</div>";
  }
  //freeResult($info);
?>
