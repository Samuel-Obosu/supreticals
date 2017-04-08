<?php
  $pid=$_SESSION['q'];
  $sql="SELECT * FROM lab WHERE Pid='$pid'";
  $res=mysqli_query($connection, $sql);
  $labs=array();
  if($row=mysqli_fetch_assoc($res)){
      $labs=array("Screening"=> $row["Screening"],
                  "Ecg"=>$row["Ecg"],
                  "Papsmear"=>$row["Papsmear"],
                  "Psa"=>$row["Psa"],
                  "Mammogram"=>$row["Mammogram"],
                  "Hiv"=>$row["Hiv"]);
    echo "<div class='table-responsive'>
      <table class='table table-hover'>
      <thead>
        <tr class='info'>
            <th>TEST</th>
            <th>STATE</th>
            </tr>
          </thead>";
          foreach ($labs as $key => $value) {
            if($key=="Screening"&&$value=="DONE"){
              echo "<tr class='success'>
                    <td>ROUTINE BLOOD WORK</td>
                    <td>$value</td>
                    </tr>";
            }elseif($key=="Screening"&&$value=="TO DO"){
              echo "<tr class='danger'>
                    <td>ROUTINE BLOOD WORK</td>
                    <td>$value</td>
                    </tr>";
            }elseif($key=="Papsmear"&&$value=="DONE"){
              echo "<tr class='success'>
                    <td>PAP SMEAR</td>
                    <td>$value</td>
                    </tr>";
            }elseif($key=="Papsmear"&&$value=="TO DO"){
              echo "<tr class='danger'>
                    <td>PAP SMEAR</td>
                    <td>$value</td>
                    </tr>";
            }elseif($value=="DONE"){
                    $cap=strtoupper($key);
                  echo "<tr class='success'>
                        <td>$cap</td>
                        <td>$value</td>
                        </tr>";
                }elseif($value=="TO DO"){
                    $cap=strtoupper($key);
                	  echo "<tr class='danger'>
                        <td>$cap</td>
                        <td>$value</td>
                        </tr>";
                }
           }
          echo "</table></div>";

  }else{
    echo "<div class='alert alert-warning'>
      <div class='row' >
      <label class='control-label col-sm-4'>Information</label>
    <label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>
      No Lab Infomation Found </label>
      </div>
      </div>";
  }

?>
