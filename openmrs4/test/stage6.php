<?php
  session_start();
  include("config.php");
  $pid=$_GET['q'];
  $_SESSION['q']=$pid;

  //fetching lab records
  $sql="SELECT * FROM lab WHERE Pid='$pid'";
  $data=mysqli_query($connection, $sql);
  $row=mysqli_fetch_array($data, MYSQLI_ASSOC);

  //contains labs for which results must be uploaded
  $upArr=array();
  foreach ($row as $key => $value) {
    //if lab is DONE then the results would be uploaded
    if($value=="DONE"){
      array_push($upArr, $key);
    }
  }
?>
<form action="actions/uploadAction.php" method="post" enctype="multipart/form-data">
  <select>
    <?php
      //displaying the various labs the person has done
      //so that it's results can be uploaded
      foreach ($upArr as $key => $value) {
        echo "<option value='$value'>$value</option>";
      }
    ?>
  </select>
  <br>
  <input type="file" name="file_upload"/>
  <br>
  <input type="submit" name="submit"  value="Upload">
</form>
