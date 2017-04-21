<?php
		include("config.php");
		include("forms1/func.php");
		$pid=$_SESSION['q'];
		// echo "Pid".$pid;
		$sql="SELECT * FROM patientbios WHERE Pid='$pid' LIMIT 1";
		$res=mysqli_query($connection, $sql);
		$row=array();

		// echo $sql;
		if(mysqli_num_rows($res)==1){
				$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
		}else{
			echo "Multiple rows";
		}

?>
<form class="form-horizontal">

		<div class="form-group">
		<label class="control-label col-sm-4">Full Name of Person Examined(Family, given middle initial)</label>
		<?php disp("FullName"); ?>

	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Gender</label>
		<?php disp("Gender"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Date of Birth (m/d/y)</label>
		<?php disp("Dob"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Marital Status</label>
		<?php disp("MaritalStat"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">MedFocus ID Number</label>
		<?php disp("MfiId"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Id Number</label>
		<?php disp("IdNum"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Employer</label>
		<?php disp("Employer"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Office/Branch</label>
		<?php disp("Branch"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Department</label>
		<?php disp("Dept"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Email</label>
		<?php disp("Email"); ?>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Telephone</label>
		<?php disp("Tel"); ?>
	</div>
</form>
