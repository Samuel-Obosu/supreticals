<?php session_start();
  include ('../config.php');
  $page=$_SESSION['page'];
  $pType=$_SESSION['pType'];

  $q=mysqli_real_escape_string($connection,$_GET['q']);
  //$sql="SELECT Pid, FullName FROM patientbios NOT IN (SELECT Pid FROM $tbl)";
  $sql=hideSearch($pType);
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
      //echo "<br> ";
      $count=0;
      for ($i=0; $i < $nLen; $i++) {
        if(($i==$nLen-1)AND(findMatch($q, $id[$i], $names[$i])=="no suggestions found") AND $count==0 ){
          echo "<a href='#' class='list-group-item'>No Suggestions Found</a>";
          continue;
        }else
        if(findMatch($q, $id[$i], $names[$i])!="no suggestions found"){
          echo findMatch($q, $id[$i], $names[$i]);
          $count++;
        }
      }
    }/*else {
        echo "no suggestions found";
    }*/


function findMatch($q, $spId, $name){
		global $page;
    global $sql;
  // lookup all hints from array if $q is different from ""
  if ($q !== "") {
      $n = strtoupper($q);
          //checking if the query is a substring of a specific name
          if(stristr($name, $n)){
            return "<a href='$page?q=$spId' class='list-group-item'>$name</a>" ;
            //echo $sql;
          }else{
              return "no suggestions found";

          }
        }
  }

  function hideSearch($personel){
      //if a record of a patient has been created in entry table of $personel
      //then the search would hide the patient's name
    switch ($personel) {
      case 's2':
        $sql="SELECT Pid, FullName FROM patientbios WHERE Pid NOT IN (SELECT Pid FROM patienthist)";
        break;

      case 's3':
        $sql="SELECT Pid, FullName FROM patientbios WHERE Pid NOT IN (SELECT Pid FROM currentstate)";
        break;

      case 's4':
        $sql="SELECT Pid, FullName FROM patientbios WHERE Pid IN (SELECT Pid FROM lab WHERE RecDate is null)";
        break;

      case 's5':
        $sql="SELECT Pid, FullName FROM patientbios WHERE Pid NOT IN (SELECT Pid FROM currentstate WHERE NOT RecPid='null')";
        break;

      case 's6':
        //$sql="SELECT Pid, FullName FROM patientbios WHERE Pid NOT IN (SELECT Pid FROM labresults)";
        $sql="SELECT Pid, FullName FROM patientbios";
        break;

      case 's7':
          $sql="SELECT Pid, FullName FROM patientbios WHERE Pid NOT IN (SELECT PId FROM summary WHERE Diag42 IS NULL)";
          break;

      default:
        # code...
        break;
    }
    return $sql;
  }


?>
