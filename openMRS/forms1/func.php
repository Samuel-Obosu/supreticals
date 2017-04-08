<?php
function ndisp($col){
			global $row;
			if(stristr(strtoupper($row[$col]),"NULL")){
				echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'> No Information Found </label></div>";
			}else{
					echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".$row[$col]."</label></div>";
			}
		}

function cdisp($col){
			global $row;
			if(stristr(strtoupper($row[$col]),"NO")){
				echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".$row[$col]."</label></div>";
			}else{
					echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>".$row[$col]."</label></div>";
				fdisp($col);
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

				if(mysqli_num_rows($res)>0){
					echo "<div class='table-responsive'>
 						<table class='table table-hover'>
						<thead>
							<tr class='success'>
									<th>Relation</th>
										<th>Age</th>
									<th>Condition</th>
									</tr>
								</thead>
						";

					while($row=mysqli_fetch_assoc($res)){
							$rel=$row['Relation'];
							$age=$row['Age'];
							$stat=$row['Status'];

							echo "<tr class='success'>
        						<td>$rel</td>
        						<td>$age</td>
        					<td>$stat</td>
      							</tr>";
						}
						echo "</table></div>";
				}else{
					echo "<div class='alert alert-warning'>
						<div class='row' >
						<label class='control-label col-sm-4'>Information</label>
					<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>
						No Family Infomation Found </label>
						</div>
						</div>";

				}
      }
?>
