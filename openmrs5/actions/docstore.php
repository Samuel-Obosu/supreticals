<?php
  session_start();
  include('../config.php');
  $pid=$_SESSION['q'];
  $recPid=$_SESSION['recPid'];
  $page=$_SESSION['page'];
  $diagNo=array();
  $desc=array();
  $fields=array();
  $values=array();

			foreach($_POST as $field => $value){
          $len=strlen($field);
          $row=substr($field, 1, $len);
          $new=str_replace("No",'',$row);
          //date_default_timezone_set("Africa/Accra");
          $dat=mysqli_date();

        if(stristr($field,"dDesc")){
            array_push($desc, mysqli_real_escape_string($connection,$value));
        }elseif(stristr($field,"dDiagNo")){
             array_push($diagNo, mysqli_real_escape_string($connection,$value));
         }elseif((!stristr( $field, "dDiagNo"))|| (!stristr($field, "dDesc"))){
					array_push($fields, mysqli_real_escape_string($connection,$field));
					array_push($values, mysqli_real_escape_string($connection,$value));
				}
			}

			$sql="UPDATE currentstate SET ";
      for ($i=0; $i <count($fields) ; $i++) {
        if($i<count($fields)-1){
          $sql.=" $fields[$i] = '$values[$i]', ";
        }else{
          $sql.=" $fields[$i] = '$values[$i]' ";
        }
      }
       $sql.=", RecPid='$recPid', RecDate='$dat' WHERE Pid=$pid";


      $sql2="INSERT INTO cdetails(Pid, Diag, Descr) VALUES ";
      if(count($diagNo)==count($desc)){
        for ($i=0; $i <count($diagNo)-1 ; $i++) {
          if($desc[$i]==''){
            continue;
          }else{
          $sql2.="('$pid' , '$diagNo[$i]', '$desc[$i]'),";
          }
        }
        $i=count($diagNo)-1 ;
        if($desc[$i]!=''){
          $sql2.="('$pid' , '$diagNo[$i]', ''$desc[$i]')";
          $row=$sql2;
        }else{
          $row=substr($sql2, 0, strlen($len)-2);
        }
      }

      $data=mysqli_query($connection, $sql);
      $res=mysqli_query($connection, $row);

      // if($data){
      //   if($res){
      //       header('location:../findper.php?q=1');
      //   }else{
      //     header('location:../findper.php?q=1');
      //   }
      // }else{
      //   header('location:../$page?q=1');
      // }

      if($data){
        if($res){
            header("location:../$page?q={$pid}&sav=1");
        }else{
          header('location:../findper.php?q=1');
        }
      }else{
        header("location:../$page?q=1");
      }

?>
