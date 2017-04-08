<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Laboratary Tests</a>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">
      <?php
        $pid=$_SESSION['q'];
        $sql="SELECT * FROM lab WHERE Pid='$pid'";
        $res=mysqli_query($connection, $sql);
        $labs=array();
        if($row=mysqli_fetch_assoc($res)){
            $labs=array("Screening"=> $row["Screening"],
                        "Ecg"=>$row["Ecg"],
                        "Papsmear"=>$row["Papsmear"],
                        "Mammogram"=>$row["Mammogram"],
                        "Psa"=>$row["Psa"],
                        "Hiv"=>$row["Hiv"]);
          echo "<form action='actions/s4Action.php' method ='post' class='form-horizontal'>";
          echo "<div class='table-responsive'>
            <table class='table table-hover'>
            <thead>
              <tr class='success'>
                  <th>TEST</th>
                  <th>STATE</th>
                  </tr>
                </thead>";
                foreach ($labs as $key => $value) {
                      if(($value=="TO DO") && ($key=="Screening")){
                        $cap=strtoupper($key);
                      	  echo "<tr class='info'>
                              <td>ROUTINE BLOOD WORK</td>
                              <td><input type='checkbox' name='$key' value='DONE'>Done</input></td>
                              </tr>";
                      }elseif($value=="TO DO"){
                        $cap=strtoupper($key);
                      	  echo "<tr class='info'>
                              <td>$cap</td>
                              <td><input type='checkbox' name='$key' value='DONE'>Done</input></td>
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
        echo "<div class='row'>
         <div class='col-md-6 col-md-offset-3'>
            <input type='submit'  value='Save' class='btn btn-success btn-block'/>
       </div>
       </div>";
      ?>

    </div>
  </div>
</div>
</div>
