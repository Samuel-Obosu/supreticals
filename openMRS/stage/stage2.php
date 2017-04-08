<?php
  if(isset($_GET['q'])){
    $_SESSION['q']=$_GET['q'];
  }
?>
<!--br>
<div id="result">
<div class='alert alert-info'>No Family Record Saved </div>
</div-->
<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Family Record</a>
    </h4>
  </div>
  <div id="collapse7" class="panel-collapse collapse in">
    <div class="panel-body">

      <form class="form-inline">
 <div class="form-group">
   <label for="rel">Relation:</label>
   <select id="rel" class="form-control">
      <option value="Father" required>Father</option>
      <option value="Mother" required>Mother</option>
      <option value="Brother" required>Brother</option>
      <option value="Sister" required>Sister</option>
</select>
 </div>
 <div class="form-group">
   <label for="Status">Status:</label>
   <select id="status" class="form-control">
    <option value="Alive" required>Alive </option>
    <option value="Dead" required>Dead</option>
</select>
 </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" id="age" class="form-control" required>
  </div>
 </div>
 <button type="submit" class="btn btn-success" id="record" onclick="conf('rel', 'age', 'status')">Record</button>
</form>

</div>
</div>
</div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Health History</a>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">

      <form class="form-horizontal" method="post" action="actions/s2Action.php">
<ol type="A">

  <li> Has the person ever been treated for, or been told by a member of the medical profession that the person has:</li>
  <ol type="1">
  <div class="form-group">
  <label class="control-label col-sm-4"><!--1--> <li>Pain, pressure, or discomfort in the chest or arms; high blood pressure; heart murmur; irregular heartbeat; or any other disease or disorder of the heart?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA1" id="DiagA1" onchange="port('DiagA1', 'hDiagA1')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA1" id="DiagA1" onchange="port('DiagA1', 'hDiagA1')" value="no" required>No</label>
  </div>
  </div>

  <div class="hd" id="hDiagA1">
          <input type="text" name="dDiagNoA1"  value="DiagA1" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseA1" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescA1" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameA1" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameA1" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddA1" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateA1" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
    </div>

  <div class="form-group">
  <label class="control-label col-sm-4"> <!--2--> <li>Anemia; leukemia; or any other disorder of the blood, veins or arteries?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA2" id="DiagA2" onchange="port('DiagA2', 'hDiagA2')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA2" id="DiagA2" onchange="port('DiagA2', 'hDiagA2')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA2">
  				<input type="text" name="dDiagNoA2"  value="DiagA2" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseA2" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescA2" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameA2" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameA2" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddA2" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateA2" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  	</div>


  <div class="form-group">
  <label class="control-label col-sm-4"><!--3--> <li>Asthma; bronchitis; pneumonia; tuberculosis; emphysema; shortness of breath; chronic cough, or any other disorder of the lungs or respiratory system?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA3" id="DiagA3" onchange="port('DiagA3', 'hDiagA3')" value="yes" required>Yes</label>
    <label class="radio-inline"><input type="radio" name="DiagA3" id="DiagA3" onchange="port('DiagA3', 'hDiagA3')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA3">
  				<input type="text" name="dDiagNoA3"  value="DiagA3" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseA3" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescA3" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameA3" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameA3" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddA3" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateA3" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>


  <div class="form-group">
  <label class="control-label col-sm-4"><!--4--> <li>Mental or emotional disorder, nervous breakdown; epilepsy; convulsions; chronic fatigue; fainting spells; paralysis; stroke; or any other disorder of the brain or nervous system?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA4" id="DiagA4" onchange="port('DiagA4', 'hDiagA4')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA4" id="DiagA4" onchange="port('DiagA4', 'hDiagA4')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA4">
  				<input type="text" name="dDiagNoA4"  value="DiagA4" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseA4" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescA4" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameA4" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameA4" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddA4" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateA4" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>


  <div class="form-group">
  <label class="control-label col-sm-4"><!--5--> <li>Significant weight loss; ulcer; colitis; diverticulitis; hepatitis; cirrhosis; persistent diarrhea; or other disease of the liver, gall bladder, pancreas, stomach or intestines?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA5" id="DiagA5" onchange="port('DiagA5', 'hDiagA5')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA5" id="DiagA5" onchange="port('DiagA5', 'hDiagA5')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA5">
  				<input type="text" name="dDiagNoA5"  value="DiagA5" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseA5" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescA5" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameA5" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameA5" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddA5" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateA5" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--6--> <li>Diabetes; thyroid; recurrent enlarged glands; or other glandular disease or disorder?</li></label>
  <div class="col-ms-8">
    <label class="radio-inline"><input type="radio" name="DiagA6" id="DiagA6" onchange="port('DiagA6', 'hDiagA6')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA6" id="DiagA6" onchange="port('DiagA6', 'hDiagA6')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA6">
  				<input type="text" name="dDiagNoA6"  value="DiagA6" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseA6" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescA6" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameA6" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameA6" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddA6" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateA6" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--7--> <li>Arthritis; gout; or any bone, joint, muscle, or skin disorder?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA7" id="DiagA7" onchange="port('DiagA7', 'hDiagA7')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA7" id="DiagA7" onchange="port('DiagA7', 'hDiagA7')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA7">
          <input type="text" name="dDiagNoA7"  value="DiagA7" hidden="true">
          <div class="form-group" required>
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseA7" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescA7" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameA7" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameA7" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddA7" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateA7" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--8--><li> Polyp, tumor, or cancer?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA8" id="DiagA8" onchange="port('DiagA8', 'hDiagA8')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA8" id="DiagA8" onchange="port('DiagA8', 'hDiagA8')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA8">
          <input type="text" name="dDiagNoA8"  value="DiagA8" hidden="true">
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseA8" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescA8" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameA8" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameA8" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddA8" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateA8" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--9--> <li> Disorder of the urinary tract or kidneys; urethritis; cystitis; sugar, albumin, or blood in the urine?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA9" id="DiagA9" onchange="port('DiagA9', 'hDiagA9')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA9" id="DiagA9" onchange="port('DiagA9', 'hDiagA9')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA9">
  				<input type="text" name="dDiagNoA9"  value="DiagA9" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseA9" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescA9" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameA9" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameA9" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddA9" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateA9" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>

  <div class="form-group">
  <label class="control-label col-sm-4"><li> Prostate or testicular disease; venereal disease, herpes; or disease of the uterus, ovaries or breasts?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA10" id="DiagA10" onchange="port('DiagA10', 'hDiagA10')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA10" id="DiagA10" onchange="port('DiagA10', 'hDiagA10')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA10">
  				<input type="text" name="dDiagNo10"  value="DiagA10" hidden="true">
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDisease10" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDesc10" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocName10" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospName10" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAdd10" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDate10" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--11-->  <li>Any disorder of the eyes, ears, nose, or throat?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA11" id="DiagA11" onchange="port('DiagA11', 'hDiagA11')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA11" id="DiagA11" onchange="port('DiagA11', 'hDiagA11')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA11">
          <input type="text" name="dDiagNoA11"  value="DiagA11" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseA11" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescA11" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameA11" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameA11" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddA11" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateA11" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--12-->  <li>Any other health impairment or medically or surgically treated condition within the last 5 years not mentioned above?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagA12" id="DiagA12" onchange="port('DiagA12', 'hDiagA12')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagA12" id="DiagA12" onchange="port('DiagA12', 'hDiagA12')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagA12">
          <input type="text" name="dDiagNoA12"  value="DiagA12" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseA12" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescA12" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameA12" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameA12" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddA12" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateA12" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>
</ol>

  <div class="form-group">
  <label class="control-label col-sm-4"><b><!--B--> </b> <li>Has the person ever been treated for, or been told by a licensed member of the medical profession that the person has, Acquired Immune Deficiency Syndrome (AIDS) or any disorder or deficiency of the immune system?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagB" id="DiagB" onchange="port('DiagB', 'hDiagB')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagB" id="DiagB" onchange="port('DiagB', 'hDiagB')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagB">
          <input type="text" name="dDiagNoB"  value="DiagB" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseB" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescB" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameB" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameB" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddB" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateB" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <b><!--C--> </b> <li>Within the past 10 years, has the person:</li> <br>

  <ol type="1">
  <div class="form-group">
  <label class="control-label col-sm-4"><!--1--> <li>Tested positive in a test to detect antibodies to the AIDS virus (Human Immunodeficiency Virus (HIV), Human T-Cell Lymphotrophic virus type III (HTLVIII)?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagC1" id="DiagC1" onchange="port('DiagC1', 'hDiagC1')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagC1" id="DiagC1" onchange="port('DiagC1', 'hDiagC1')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagC1">
  				<input type="text" name="dDiagNoC1"  value="DiagC1" hidden="true" required>
  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Disease</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDiseaseC1" placeholder="Disease" required>
  		 			</div>
  		 		</div>

  		 		<div class="form-group">
  		 			<label class="control-label col-sm-4">Description</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDescC1" placeholder="Description" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Doctor's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dDocNameC1" placeholder="Doctor's Name" required>
  		 			</div>
  				</div>

  				<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Name</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospNameC1" placeholder="Hospital's Name" required>
  		 			</div>
  				</div>

  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Hospital's Address</label>
  					<div class="col-sm-8">
  						<input type="text" class="form-control" name="dhospAddC1" placeholder="Hospital's Address" required>
  		 			</div>
  				</div>


  			<div class="form-group">
  		 			<label class="control-label col-sm-4">Date Diagnosed</label>
  					<div class="col-sm-8">
  						<input type="date" class="form-control" name="dDateC1" placeholder="dd/mm/yyyy" required>
  		 			</div>
  				</div>
  			</div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--2--> <li>Had a blood transfusion?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagC2" id="DiagC2" onchange="port('DiagC2', 'hDiagC2')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagC2" id="DiagC2" onchange="port('DiagC2', 'hDiagC2')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagC2">
          <input type="text" name="dDiagNoC2"  value="DiagC2" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseC2" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescC2" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameC2" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameC2" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddC2" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateC2" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>
  </ol>

  <div class="form-group">
  <label class="control-label col-sm-4"><b><!--D--> </b> <li>Within the past 5 years, has the person been a patient in or had treatment at a hospital, clinic, sanitarium or other medical facility?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagD" id="DiagD" onchange="port('DiagD', 'hDiagD')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagD" id="DiagD" onchange="port('DiagD', 'hDiagD')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagD">
          <input type="text" name="dDiagNoD"  value="DiagD" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseD" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescD" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameD" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameD" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddD" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateD" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--b>E.</b--> <li>Is the person now under regular medical observation by, or taking treatment from, a member of the medical profession?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagE" id="DiagE" onchange="port('DiagE', 'hDiagE')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagE" id="DiagE" onchange="port('DiagE', 'hDiagE')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagE">
          <input type="text" name="dDiagNoE"  value="DiagE" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseE" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescE" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameE" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameE" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddE" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateE" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>


  <b><!--F--> </b><li> Other than as stated in the previous answers, has the person, within the last 5 years:</li>

  <ol type="1">
  <div class="form-group">
  <label class="control-label col-sm-4"><!--1--> <li>Had a check-up or consultation with a member of the medical profession?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagF1" id="DiagF1" onchange="port('DiagF1', 'hDiagF1')" value="yes" required>Yes</label>
    <label class="radio-inline"><input type="radio" name="DiagF1" id="DiagF1" onchange="port('DiagF1', 'hDiagF1')" value="no" required>No </label>
  </div>
  </div>
  <div class="hd" id="hDiagF1">
          <input type="text" name="dDiagNoF1"  value="DiagF1" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseF1" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescF1" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameF1" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameF1" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddF1" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateF1" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--2--> <li>Had an electrocardiogram, X-ray, blood test or other test?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagF2" id="DiagF2" onchange="port('DiagF2', 'hDiagF2')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagF2" id="DiagF2" onchange="port('DiagF2', 'hDiagF2')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagF2">
          <input type="text" name="dDiagNoF2"  value="DiagF2" hidden="true">
          <div class="form-group" required>
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseF2" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescF2" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameF2" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameF2" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddF2" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDate" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--3--> <li>Been advised by a member of the medical profession to have any diagnostic test, hospitalization, or surgery which was not completed?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagF3" id="DiagF3" onchange="port('DiagF3', 'hDiagF3')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagF3" id="DiagF3" onchange="port('DiagF3', 'hDiagF3')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagF3">
          <input type="text" name="dDiagNoF3"  value="DiagF3" hidden="true">
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseF3" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescF3" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameF3" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameF3" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddF3" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateF3" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  </ol>


  <div class="form-group">
  <b><!--G--> </b><label class="control-label col-sm-4"> <li>Does the person have a deformity or an amputation?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagG" id="DiagG" onchange="port('DiagG', 'hDiagG')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagG" id="DiagG" onchange="port('DiagG', 'hDiagG')" value="no" required>No </label>
  </div>
  </div>
  <div class="hd" id="hDiagG">
          <input type="text" name="dDiagNoG"  value="DiagG" hidden="true">
          <div class="form-group" required>
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseG" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescG" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameG" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameG" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddG" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateG" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><b><!--H--> </b> <li>Does the person now take any medicine prescribed by a member of the medical profession?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagH" id="DiagH" onchange="port('DiagH', 'hDiagH')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagH" id="DiagH" onchange="port('DiagH', 'hDiagH')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagH">
          <input type="text" name="dDiagNoH"  value="DiagH" hidden="true" required>
          <div class="form-group">
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseH" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescH" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameH" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameH" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddH" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateH" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--b>I.</b--> <li>Except as legally prescribed by a physician, has the person used narcotics, cocaine, marijuana, or any hallucinatory or mind-altering substances in the past 10 years?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagI" id="DiagI" onchange="port('DiagI', 'hDiagI')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagI" id="DiagI" onchange="port('DiagI', 'hDiagI')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagI">
          <input type="text" name="dDiagNoI"  value="DiagI" hidden="true">
          <div class="form-group" required>
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseI" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescI" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameI" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameI" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddI" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateI" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="form-group">
  <label class="control-label col-sm-4"><!--b>J.</b--> <li>In the last 5 years, has the person received treatment for, or joined an organization because of, the alcoholism or drug addiction of that person?</li></label>
  <div class="col-sm-8">
    <label class="radio-inline"><input type="radio" name="DiagJ" id="DiagJ" onchange="port('DiagJ', 'hDiagJ')" value="yes" required>Yes </label>
    <label class="radio-inline"><input type="radio" name="DiagJ" id="DiagJ" onchange="port('DiagJ', 'hDiagJ')" value="no" required>No</label>
  </div>
  </div>
  <div class="hd" id="hDiagJ">
          <input type="text" name="dDiagNoJ"  value="DiagJ" hidden="true">
          <div class="form-group" required>
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseJ" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescJ" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameJ" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameJ" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddJ" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateJ" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

  <div class="hd" id="hDiagK1">
          <input type="text" name="dDiagNoK1"  value="DiagK1" hidden="true">
          <div class="form-group" required>
            <label class="control-label col-sm-4">Disease</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDiseaseK1" placeholder="Disease" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDescK1" placeholder="Description" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Doctor's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dDocNameK1" placeholder="Doctor's Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospNameK1" placeholder="Hospital's Name" required>
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-4">Hospital's Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dhospAddK1" placeholder="Hospital's Address" required>
            </div>
          </div>


        <div class="form-group">
            <label class="control-label col-sm-4">Date Diagnosed</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dDateK1" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-4"><b><!--K--> </b> <li>Would you like to take an HIV Test?</li></label>
        <div class="col-sm-8">
        <label class="radio-inline"><input type="radio" name="hiv" value="yes" required>Yes </label>
        <label class="radio-inline"><input type="radio" name="hiv" value="no" required>No</label>
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-4"><b><!--K--> </b> <li>Have you ever done a Hepatitis B test?</li></label>
        <div class="col-sm-8">
        <label class="radio-inline"><input type="radio" name="DiagL" value="yes" required>Yes </label>
        <label class="radio-inline"><input type="radio" name="DiagL" value="no" required>No</label>
        </div>
        </div>
</ol>

<div class="row">
 <div class="col-md-5 col-md-offset-3">
    <input type="submit"  value="Save" class="btn btn-success btn-block" required/>
</div>
</div>
</form>

</div>
</div>
</div>
</div>
