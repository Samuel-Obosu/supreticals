<?php
function dispSummary($col){
	global $row;
	if(stristr(strtoupper($row[$col]),"Yes")){
		echo "checked";
	}
}

function ndisp($col){
			global $row;
			if(stristr(strtoupper($row[$col]),"NULL")){
				echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'> No Information Found </label></div>";
			}elseif($col=="DiagC1A"||$col=="DiagC1B"||$col=="DiagC2A"||$col=="DiagC2B"){
				return $row[$col];
			}else{
					echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".$row[$col]."</label></div>";
			}
		}

function cdisp($col){
			global $row;
			if(stristr(strtoupper($row[$col]),"NO")){
				echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".strtoupper($row[$col])."</label></div>";
			}else{
					echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".strtoupper($row[$col])."</label></div>";
					if (($col=="hepb_diag")||($col=="hepb_diag_fur")){

					}else{
						fdisp($col);
				}
			}
		}

function fdisp($col){
			global $pid, $connection;
			$sql="SELECT * FROM details WHERE Pid='$pid' AND Diag='$col'";
			$res=mysqli_query($connection, $sql);

			if($row=mysqli_fetch_assoc($res)){
				$dis=$row['Disease'];
				$des=$row['Descr'];
				$hos=$row['HospName'];
				$add=$row['HospAddress'];
				$date=$row['Date'];
				$dc=$row['DocName'];

			print
			"	<div class='alert alert-warning'>
				<div class='row' >
				<label class='control-label col-sm-4'>Disease</label><label class='col-sm-8 control-label'style='color:SkyBlue; text-align:left;'>$dis</label>
				</div><div class='row'>
				<label class='control-label col-sm-4'>Description</label><label class='col-sm-8 control-label' style='color:SkyBlue; text-align:left;'>$des</label>
				</div><div class='row'>
				<label class='control-label col-sm-4'>Hospital's Name</label><label class='col-sm-8 control-label' style='color:SkyBlue; text-align:left;'>$hos</label>
				</div><div class='row'>
				<label class='control-label col-sm-4'>Hospital's Address</label><label class='col-sm-8 control-label' style='color:SkyBlue; text-align:left;'>$add</label>
				</div><div class='row'>
				<label class='control-label col-sm-4'>Date Diagnosed</label><label class='col-sm-8 control-label' style='color:SkyBlue; text-align:left;'>$date</label>
				</div><div class='row'>
				<label class='control-label col-sm-4'>Doctor's Name</label><label class='col-sm-8 control-label'style='color:SkyBlue; text-align:left;'>$dc</label>
				</div></div>
				";
		}else{
				echo "<div class='alert alert-warning'>
					<div class='row' >
					<label class='control-label col-sm-4'>Information</label>
				<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>
					No Further Details Found </label>
					</div>
					</div>";
		}
	}

function disp($col){
  			global $row;
  			echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".$row[$col]."</label>";
  		}

function dispFam(){
				global $pid, $connection;
				$sql="SELECT * FROM familyinfo WHERE Pid='$pid'";
				$res=mysqli_query($connection, $sql);
                                 //if($res){ echo "true";}else{echo "false";}echo $sql;
				if(mysqli_num_rows($res)>0){
					echo "<div class='table-responsive'>
 						<table class='table table-hover'>
						<thead>
							<tr class='success'>
									<th>Relation</th>
										<th>Age</th>
									<th>Condition</th>
									<th>Cancer</th>
									<th>Type of Cancer</th>
									<th>Diabetes</th>
									<th>High Blood Pressure</th>
									<th>Heart or Kidney Disease</th>
									<th>Nervous or Mental Disorder</th>
									<th>Tuberculosis</th>
									<th>Hereditary Disorder</th>
									<th>Hereditary Disorder Type</th>
									</tr>
								</thead>
						";

					while($row=mysqli_fetch_assoc($res)){
							//print_r($row);
							$rel=$row['Relation'];
							$age=$row['Age'];
							$stat=$row['Status'];
							$canc=$row['canc']==""?"Not present":$row['canc'];
							$hd_c=$row['hd_cancer']==""?"Not present":$row['hd_cancer'];
							$diab=$row['diab']==""?"Not present":$row['diab'];
							$hbp=$row['hbp']==""?"Not present":$row['hbp'];
							$hkd=$row['hkd']==""?"Not present":$row['hkd'];
							$nmd=$row['nmd']==""?"Not present":$row['nmd'];
							$tb=$row['tb']==""?"Not present":$row['tb'];
							$hb=$row['hd']==""?"Not present":$row['hd'];
							$hd_d=$row['hd_disorder']==""?"Not present":$row['hd_disorder'];

							echo "<tr class='success'>
        						<td>$rel</td>
        						<td>$age</td>
        					<td>$stat</td>
									<td>$canc</td>
									<td>$hd_c</td>
									<td>$diab</td>
									<td>$hbp</td>
									<td>$hkd</td>
									<td>$nmd</td>
									<td>$tb</td>
									<td>$hb</td>
									<td>$hd_d</td>
      							</tr>";
						}
						echo "</table></div>";
				}else{
					echo "<div class='alert alert-warning'>
						<div class='row' >
						<label class='control-label col-sm-4'>Information</label>
					<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>
						No Family Information uploaded </label>
						</div>
						</div>";

				}
      }

function upload_list(){
	//shows the list of labs to be uploaded
	global $pid, $connection;
	$sql="SELECT * FROM lab WHERE Pid='$pid' LIMIT 1";
	$res=mysqli_query($connection, $sql);
	$labs=mysqli_fetch_array($res,MYSQLI_ASSOC);

	foreach ($labs as $labName => $value) {
		//if a lab is done then it must be uploaded
			if($value=="DONE"){
				if ($labName=='Screening'){
					echo "<option value=\"$labName\">ROUTINE BLOOD WORK</option>";
				}elseif($labName=='Papsmear'){
					echo "<option value=\"$labName\">PAP SMEAR</option>";
				}else{
					echo "<option value=\"$labName\">".strtoupper($labName)."</option>";
				}
			}
		}
}

function dispLab(){
				global $pid, $connection;
				$sql="SELECT * FROM lab WHERE Pid='$pid'";
				$res=mysqli_query($connection, $sql);

				$labs=mysqli_fetch_array($res,MYSQLI_ASSOC);
				$stat=false;

				foreach ($labs as $labName => $status) {
					if($status=="UPLOADED"){
						$curStat=true;
					}
					$stat=$stat||$curStat;
				}

				if($stat==true){
					echo "<div class='table-responsive'>
 						<table class='table table-hover'>
						<thead>
							<tr class='success'>
									<th>Result</th>
										<th>Status</th>
									</tr>
								</thead>";

					foreach ($labs as $labName => $status) {
						if(($status=="UPLOADED") && ($labName=="Screening")){
							echo "<tr class='success'>
							<td>ROUTINE BLOOD WORK</td>
							<td>$status</td>
							</tr>";
						}elseif(($status=="UPLOADED") && ($labName=="Screening")){
							echo "<tr class='success'>
							<td>PAP SMEAR</td>
							<td>$status</td>
							</tr>";
						}elseif ($status=="UPLOADED") {
							echo "<tr class='success'>
							<td>$labName</td>
							<td>$status</td>
							</tr>";
						}
					}
						echo "</table></div>";
				}else{
					echo "<div class='alert alert-warning'>
						<div class='row' >
						<label class='control-label col-sm-4'>Information</label>
					<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>
						No laboratory results uploaded </label>
						</div>
						</div>";

				}
}


?>
