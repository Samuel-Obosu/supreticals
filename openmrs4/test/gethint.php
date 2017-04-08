<?php
  include ('../config.php');
  $q=$_GET['q'];
  $sql="SELECT Pid, FullName FROM patientbios";
  $res=mysqli_query($connection, $sql);

  //arrays to hold names and ids
    $names=array();
    $id=array();

  //fetching all the names and ids into arrays
  while($row=mysqli_fetch_assoc($res)){
    array_push($id, $row['Pid']);
    array_push($names,strtoupper($row['FullName']));

  }

    $nLen=count($names);
    $iLen=count($id);
    //checking for equal number of records
    if($nLen==$iLen){
      //finding match in each
      echo "<br>";
      for ($i=0; $i < $nLen; $i++) {
        findMatch($q, $id[$i], $names[$i]);
      }
    }else {
        echo "no suggestions found";
    }


function findMatch($q, $spId, $name){

  // lookup all hints from array if $q is different from ""
  if ($q !== "") {
      $n = strtoupper($q);
          //checking if the query is a substring of a specific name
          if(stristr( $name, $n)){
            echo "<a href='#$spId' class='list-group-item'>$name</a>" ;
            // echo $spId;
            // echo "<br>";
            //echo "Fullname -> ".$name."<br>";
          }/*else{
              echo "no suggestions found";
          }*/
        }
  }


?>
