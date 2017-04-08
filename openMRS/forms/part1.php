<form class="form-horizontal">
	<span class="label label-info"><big> Person Identification (to be completed by Examining Physician, Physician’s Assistant or Nurse)</big></span>
	

	<div class="form-group">
		<label class="control-label col-sm-4">Full Name of Person Examined(Family, given middle initial)</label>
		<div class="col-sm-8">
			<input type="text" name="" class="form-contol">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Gender</label>
		<div class="col-sm-8">
			<label class="radio-inline"><input type="radio" name="" value="MALE">Male</input></label>
			<label class="radio-inline"><input type="radio" name="" value="FEMALE">Female</input></label>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Date of Birth (m/d/y)</label>
		<div class='col-sm-6'>
            <input type='text' class="form-control" id='datetimepicker4' />
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>
	</div>
	
	<span class="label label-info"><big>Passport or government identity document of person examined</big></span><br>
	<div class="form-group">
		<label class="control-label col-sm-4">Type of Identification</label>
		<div class="col-sm-8">
			<input type="" name="">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Passport Number or Government ID Number</label>
		<div class="col-sm-8">
			<input type="text" name="">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Country of Issue</label>
		<div class="col-sm-8">
			<input type="text" name="">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Date of Expiration (m/d/y)</label>
		<div class='col-sm-6'>
            <input type='text' class="form-control" id='datetimepicker4' />
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-4">Are you satisfied as to the identity of the person being examined?</label>
		<div class="col-sm-8">
			<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
	</div>

	<big><span class="label label-info">IF YOU ARE NOT SATISFIED AS TO THE PERSON’S IDENTITY, OR HE OR SHE IS UNABLE TO <br>PROVIDE SATISFACTORY
IDENTIFICATION, PLEASE DO NOT PROCEED WITH EXAMINATION OR TESTING.</span><br>
	<div class="form-group">
		<label class="control-label col-sm-4">Examiner Name</label>
		<div class="col-sm-8">
			<input type="text" name="">
		</div>
	</div>
	
	<div class="col-sm-6 ">
	<input type="submit" name="" class="btn btn-primary" value="Submit">
	</div>
</form>