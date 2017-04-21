<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<?php
$name=$_SESSION['fullName'];
$q=$_GET['q'];
  switch ($q) {

case 1:
  $disp= "<div class='alert alert-success'>
            <strong>Entry successfully saved</strong>
          </div>";
  break;

default:
  $disp= "<div class='alert alert-info'>
          <strong>Welcome $name </strong>, Fill form to create a record.
        </div>";
  break;
}
?>

<?php echo $disp; ?>
<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Identification</a>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse in">
    <div class="panel-body">

<form class="form-horizontal" enctype="multipart/form-data" action="actions/s1Action.php" method="post">
<!--span class="label label-info">
  <big> Person Identification (to be completed by Examining Physician, Physician’s Assistant or Nurse)
  </big></span><br><br-->

<div class="form-group">
  <label class="control-label col-sm-4">Full Name of Person Examined(Family, given middle, initial)</label>
  <div class="col-sm-8">
    <input type="text" name="FullName" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" >Gender</label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="Gender" value="MALE" required>Male</input></label>
    <label class="radio-inline"><input type="radio" name="Gender" value="FEMALE" required>Female</input></label>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" >Date of Birth</label>
  <div class='col-sm-6'>
          <input type='text' class="form-control" id='datepicker' name="dob" placeholder="YYYY-MM-DD" required/>
      </div>
       <script>
        $(document).ready(function() {
        $("#datepicker").datepicker();
        });
      </script>
</div>

<div class="form-group">
  <label class="control-label col-sm-4">Marital Status</label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="MaritalStat" value="MARRIED" required>Married</input></label>
    <label class="radio-inline"><input type="radio" name="MaritalStat" value="SINGLE" required>Single</input></label>
  </div>
</div>


<!--div class="form-group">
  <label class="control-label col-sm-4">Type of Identification</label>
  <div class="col-sm-8">
    <select class="form-control" name="IdType">
          <option value="Ecobank Id" >Ecobank ID Card</option>
          <option value="MFI Id" >MFI ID Card</option>
          <option value="e-Process Id " >e-Process ID Card</option>
    </select>
  </div>
</div-->
<div class="form-group">
  <label class="control-label col-sm-4">MedFocus ID Number</label>
  <div class="col-sm-8">
    <input type="text" name="MfiId" class="form-control">
  </div>
</div>


<div class="form-group">
  <label class="control-label col-sm-4">Employee ID Number</label>
  <div class="col-sm-8">
    <input type="text" name="IdNum" class="form-control" required>
  </div>
</div>

<!--div class="form-group">
  	<label id="upload" class="control-label col-sm-4">
	Upload Id:</label>
	<div class="col-sm-8">
    	<input type="file" id="upload"  name="IdCopy"  />
	</div>
    </div>
  <div-->

<div class="form-group">
  <label class="control-label col-sm-4">Employer</label>
  <div class="col-sm-8">
    <select class="form-control" name="Employer">
          <option value="Ecobank" >Ecobank </option>
          <option value="e-Process">e-Process</option>
          <option value="other">other</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4">Office/Branch</label>
  <div class="col-sm-8">
    <input type="text" name="Branch" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4">Department</label>
  <div class="col-sm-8">
    <input type="text" name="Dept" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4">Email</label>
  <div class="col-sm-8">
    <input type="email" name="Email" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4">Telephone</label>
  <div class="col-sm-8">
    <input type="telephone" name="Tel" class="form-control" required>
  </div>
</div>

<div class="form-group">
 <label class="control-label col-sm-4"><b><!--K--> </b> <li>Would you like to take an HIV Test?</li></label>
 <div class="col-sm-8">
 <label class="radio-inline"><input type="radio" name="hiv" value="yes" required>Yes </label>
 <label class="radio-inline"><input type="radio" name="hiv" value="no" required>No</label>
 </div>
 </div>


  <div class="row">
   <div class="col-md-3 col-md-offset-3">
      <input type="button"  id="record" onclick="prompt();" value="Save"
      class="btn btn-success btn-block" required/>
  </div>
  <div class="col-md-2">
     <input type="reset"  value="Reset" class="btn btn-info btn-block" required/>
 </div>
  </div>
</form>

</div>
</div>
</div>
</div>
