<?php
  session_start();
  include('../config.php');
  $pid=$_SESSION['q'];
  $recPid=$_SESSION['recPid'];
  $page=$_SESSION['page'];
  //echo $recPid;
  // date_default_timezone_set("Africa/Accra");
  $dat=mysqli_date();
  $fields="";
  $values="";
  $diagNo=array();
  $dis=array();
  $desc=array();
  $doc=array();
  $hosN=array();
  $hosAdd=array();
  $diagDate=array();

			foreach($_POST as $field => $value){

        if(stristr($field,"dDesc")){
            array_push($desc, mysqli_real_escape_string($connection, $value));
        }elseif(stristr($field,"dDiagNo")){
             array_push($diagNo, mysqli_real_escape_string($connection,$value));
        }elseif(stristr($field,"dDisease")){
             array_push($dis, mysqli_real_escape_string($connection,$value));
        }elseif(stristr($field,"dDocName")){
              array_push($doc, mysqli_real_escape_string($connection,$value));
        }elseif(stristr($field,"dhospName")){
               array_push($hosN, mysqli_real_escape_string($connection,$value));
        }elseif(stristr($field,"dhospAdd")){
                array_push($hosAdd, mysqli_real_escape_string($connection,$value));
        }elseif(stristr($field,"dDate")){
                 array_push($diagDate, $value);
        }elseif((!stristr( $field, "dDiagNo"))|| (!stristr($field, "dDesc"))||(!stristr($field,"dDocName"))
                ||(!stristr($field,"dhospName"))||(!stristr($field,"dhospAdd"))||(!stristr($field,"dDate"))
                ||(!stristr($field,"dDisease"))){
                  if(!stristr($field,'hiv')){
  					    $fields.= "$next ".mysqli_real_escape_string($connection,$field);
                $values.="$next '".mysqli_real_escape_string($connection,$value)."'";
                $next=",";
              }
			}

    }
			$sql="INSERT INTO patienthist(Pid,$fields, RecPid, RecDate)  VALUES ($pid,$values, '$recPid', '$dat')";


      $sql2="INSERT INTO details(Pid, Diag, Descr, Disease, DocName, HospName, HospAddress, Date) VALUES ";
      // echo print_r($diagNo)."<br>";
      // echo print_r($desc)."<br>";
      // echo print_r($dis)."<br>";
      // echo print_r($doc)."<br>";
      // echo print_r($hosN)."<br>";
      // echo print_r($hosAdd)."<br>";
      // echo print_r($diagDate)."<br>";

       if(count($diagNo)==count($desc)){
        for ($i=0; $i <count($diagNo)-1 ; $i++) {
          if($desc[$i]==''&&$doc[$i]==''&&$hosN[$i]==''&&$hosAdd[$i]==''&&$diagDate[$i]==''){
              continue;
           }else{
             $sql2.="('$pid' , '$diagNo[$i]', '$desc[$i]', '$dis[$i]', '$doc[$i]', '$hosN[$i]','$hosAdd[$i]' ,'$diagDate[$i]'), ";
          }
        }
        $i=count($diagNo)-1 ;
        if($desc[$i]!=''&&$doc[$i]!=''&&$hosN[$i]!=''&&$hosAdd[$i]!=''&&$diagDate[$i]!=''){
          $sql2.="('$pid' , '$diagNo[$i]', '$desc[$i]', '$dis[$i]', '$doc[$i]', '$hosN[$i]','$hosAdd[$i]' ,'$diagDate[$i]') ";
          $row=$sql2;
         }else{
          $row=substr($sql2, 0, strlen($sql2)-2);
        }
      }
      //echo $sql;
      $data=mysqli_query($connection, $sql);

      if($data){
        unset($_SESSION['q']);
        if(desCheck()){
            //there are descriptions
            //execute the second query then the lab calc
            $res=mysqli_query($connection, $row);
            if($res){
              if(lab($pid,$connection)){
                header('location:../findper.php?q=1');
              }else{
                header('location:../$page?q=1');
              }
            }
        }else {
          //there are descriptions
          //execute only the lab calc
          if(lab( $pid,$connection)){
            header("location:../findper.php?q=1");
          }else{
            header("location:../$page?q=1");
          }
      }
    }else{
        unset($_SESSION['q']);
        header("location:../findper.php?q=2");
      }

      function desCheck(){
        global $dis;
        global $desc;
        global $doc;
        global $hosN;
        global $hosAdd;
        global $diagDate;

        $state= emptyCheck($dis)&&emptyCheck($desc)&&emptyCheck($doc)&&
        emptyCheck($hosN)&&emptyCheck($hosAdd)&&emptyCheck($diagDate);
          return $state;
      }

      function emptyCheck($array){
        //checks if the array contains only empty strings
        $len=count($array);
        $num=0;
        for ($i=0; $i <$len ; $i++) {
          if($array[$i]!=''){
            $num++;
          }
        }

        if($num==0){
          return false;
        }else{
          return true;
        }
      }


      function lab($pid,$connection){
          $sql="SELECT Gender,TIMESTAMPDIFF(YEAR, Dob, CURDATE()) AS age FROM patientbios
          WHERE Pid='$pid'";
          //echo $sql;
          $data=mysqli_query($connection,$sql);
          $res=mysqli_fetch_assoc($data);
          $age=$res['age'];
          $gen=$res['Gender'];
          $scr="TO DO";

          if($age>=40){
            $ecg="TO DO";
            $psa="TO DO";
          }else{
            $ecg="NE";
            $psa="NE";
          }

          // if($age>=40){
          // }else {
          // }

          if(($age>=21)&&(stristr($gen, "FEMALE"))){
            $PapSm="TO DO";
          }else{
            $PapSm="NE";
          }
          // echo $_POST['dDiseaseA4'];
          // echo stristr(strtoupper($_POST['dDiseaseA8']),strtoupper("cancer"))."<br>";
          if(($age<=40)&&($age>=35)&&((stristr($gen,"FEMALE")))&&((stristr(strtoupper($_POST['dDiseaseA8']),strtoupper("cancer")))
              ||(stristr(strtoupper($_POST['dDescA8']),strtoupper("cancer"))))){
            $mam="TO DO";
          }else{
            $mam="NE";
          }

          if(stristr($_POST['hiv'],"Yes")){
            $hiv="TO DO";
          }else{
            $hiv="NE";
          }

          $sql="INSERT INTO lab(Pid, Screening,Papsmear ,Ecg, Psa, Hiv, Mammogram)
                        VALUES('$pid', '$scr', '$PapSm' ,'$ecg','$psa','$hiv', '$mam')";
          // echo $age."<br>".$gen;
          // echo $sql;
           $data=mysqli_query($connection, $sql);
           if($data){
             return true;
           }else{
             return false;
           }
      }
?>
