<?php  //session_start();
	if(!isset($_SESSION['recPid'])){
    header('location:index.php?q=1');
  }
	$_SESSION['q']=$_GET['q'];

	$sql="SELECT * FROM currentstate WHERE Pid='$pid'";
	$res=mysqli_query($connection, $sql);
	$row=array();

	if(mysqli_num_rows($res)==1){
			$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
	}else{
		echo "Multiple rows";
	}
?>
<form class="form-horizontal">
		<ol type="A">
		<!-- A -->
		<div class="form-group">
			<label  class="control-label col-sm-4" ><li> Height:</li></label>
			<?php ndisp("DiagA1"); ?>


		<div class="form-group">
		 <label class="control-label col-sm-4" >Weight:</label>
		 	<?php ndisp("DiagA2"); ?>


			<div class="form-group">
				 <label class="control-label col-sm-4"> <!--C--><li>BMI</li></label>
				<?php ndisp("Bmi"); ?>

		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--B--><li>Pulse</li></label>
		 	<?php ndisp("DiagB1"); ?>



		<div class="form-group">
		 	<label class="control-label col-sm-4">Regular</label>
		 	<?php ndisp("DiagB2"); ?>


		<div class="form-group">
		 <label class="control-label col-sm-4">Irregular</label>
		 <?php ndisp("DiagB3"); ?>

			<hr>



		<div class="form-group">
			 <label class="control-label col-sm-4"> <!--C--><li>Blood pressure(seated)</li></label>
			<?php ndisp("DiagC1"); ?>

</form>

<form class="form-horizontal" method="post" action="actions/docstore.php">
		<div class="form-group">
			<label class="control-label col-sm-4"> Blood pressure (2nd)</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="000/000" name="DiagC2">
			</div>
</div>


		<hr>


		<label><!--D--> <li>Urinalysis(Please fill in blanks or attach results and forward with this form)</li></label>
			<div class="form-group">
		 <label class="control-label col-sm-4">Protein</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="DiagD1">
		 	</div>
		</div>

			<div class="form-group">
		 <label class="control-label col-sm-4">Sugar</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="DiagD2">
		 	</div>
		</div>

		<div class="form-group">
		 <label class="control-label col-sm-4">Blood</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="DiagD3">
			</div>
		</div>


		<hr/>
		<div class="form-group">
		 <label class="control-label col-sm-4"><!--E--> <li>Does the person use any type of tobacco or nicotine product?</li>
		 </label>
		 <div class="col-sm-8">
			<label class="radio-inline"><input type="radio" name="DiagE" id="DiagE" value="Yes" onchange="port('DiagE','hDiagE')">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="DiagE" id="DiagE" value="No" onchange="port('DiagE','hDiagE')">No</input></label>
		</div>
		</div>

		<div class="hd" id="hDiagE">
						<input type="text" name="dDiagNoE"  value="DiagE" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescE" placeholder="Description"></textarea>
							</div>
						</div>
		</div>

		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--F--><li>Have you ever used any type of tobacco or nicotine product?</li>
		 </label>
		 <div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="DiagF" id="DiagF" value="Yes" onchange="port('DiagF','hDiagF')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="DiagF" id="DiagF" value="No"  onchange="port('DiagF','hDiagF')">No</input></label>
		</div>
	</div>
	<div class="hd" id="hDiagF">
						<input type="text" name="dDiagNoF"  value="DiagF" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescF" placeholder="Description"></textarea>
							</div>
						</div>
		</div>
		<hr>
		 <label><!--G --><li>Is there any abnormality: </li></label>
			<ol type="1">
				<div class="form-group">
			 	<label class="control-label col-sm-4"> <li>Of the oral cavity, eyes, ears, nose, throat, skin (including xanthelasma, xanthomata, arcus senilis)?</li> </label>
			 	<div class="col-sm-8">
				<label class="radio-inline"><input type="radio" name="DiagG1" id="Diagp" value="Yes" onchange="port('Diagp','hDiagp')">Yes</input></label>
				<label class="radio-inline"><input type="radio" name="DiagG1" id="Diagp" value="No" onchange="port('Diagp','hDiagp')">No</input></label>
				</div>
				</div>

				<div class="hd" id="hDiagp">
								<input type="text" name="dDiagNoG1"  value="DiagG1" hidden="true">
								<div class="form-group">
									<label class="control-label col-sm-4">Description</label>
									<div class="col-sm-8">
										<textarea  class="form-control" name="dDescG1" placeholder="Description"></textarea>
									</div>
								</div>
				</div>

				<div class="form-group">
				<label class="control-label col-sm-4"> <li>Of the lymph nodes or the thyroid gland?</li></label>
				<label class="radio-inline"><input type="radio" name="DiagG2" id="DiagG2" value="Yes" onchange="port('DiagG2','hDiagG2')">Yes</input></label>
				<label class="radio-inline"><input type="radio" name="DiagG2" id="DiagG2" value="No" onchange="port('DiagG2','hDiagG2')">No</input></label>
				</div>

				<div class="hd" id="hDiagG2">
								<input type="text" name="dDiagNoG2"  value="DiagG2" hidden="true">
								<div class="form-group">
									<label class="control-label col-sm-4">Description</label>
									<div class="col-sm-8">
										<textarea  class="form-control" name="dDescG2" placeholder="Description"></textarea>
									</div>
								</div>
				</div>

			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Of chest, spine or extremities? </li></label>
			<label class="radio-inline"><input type="radio" name="DiagG3" id="DiagG3" value="Yes" onchange="port('DiagG3','hDiagG3')">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="DiagG3" id="DiagG3" value="No" onchange="port('DiagG3','hDiagG3')">No</input></label>
			</div>

			<div class="hd" id="hDiagG3">
							<input type="text" name="dDiagNoG3"  value="DiagG3" hidden="true">
							<div class="form-group">
								<label class="control-label col-sm-4">Description</label>
								<div class="col-sm-8">
									<textarea  class="form-control" name="dDescG3" placeholder="Description"></textarea>
								</div>
							</div>
			</div>

			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Of lungs on percussion and auscultation?</li></label>
			<label class="radio-inline"><input type="radio" name="DiagG4" id="DiagG4" value="Yes" onchange="port('DiagG4','hDiagG4')">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="DiagG4" id="DiagG4" value="No" onchange="port('DiagG4','hDiagG4')">No</input></label>
		</div>

		<div class="hd" id="hDiagG4">
						<input type="text" name="dDiagNoG4"  value="DiagG4" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescG4" placeholder="Description"></textarea>
							</div>
						</div>
		</div>
	</ol>
		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--H--> <li>Are any murmurs present?</li> </label>
		 <div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="DiagH" id="DiagH" value="Yes" onchange="port('DiagH','hDiagH')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="DiagH" id="DiagH" value="No" onchange="port('DiagH','hDiagH')">No</input></label>
			</div>
		</div>
		<div class="hd" id="hDiagH">
						<input type="text" name="dDiagNoH"  value="DiagH" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescH" placeholder="Description"></textarea>
							</div>
						</div>
		</div>
		<hr>
		<!-- I -->
		<label><li> Is there:</li>  </label><br>
			<ol type="1">

				<div class="form-group">
				 <label class="control-label col-sm-4"> <li>Intra-abdominal abnormality?</li></label>
				 <div class="col-sm-8">
					<label class="radio-inline"><input type="radio" name="DiagI1" id="DiagI1" value="Yes" onchange="port('DiagI1','hDiagI1')">Yes</input></label>
				<label class="radio-inline"><input type="radio" name="DiagI1" id="DiagI1" value="No" onchange="port('DiagI1','hDiagI1')">No</input></label>
				</div>
				</div>
				<div class="hd" id="hDiagI1">
								<input type="text" name="dDiagNoI1"  value="DiagI1" hidden="true">
								<div class="form-group">
									<label class="control-label col-sm-4">Description</label>
									<div class="col-sm-8">
										<textarea  class="form-control" name="dDescI1" placeholder="Description"></textarea>
									</div>
								</div>
				</div>


			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Any surgical scars?</li> </label>
				<div class="col-sm-8">
			<label class="radio-inline"><input type="radio" name="DiagI2" id="DiagI2" value="Yes" onchange="port('DiagI2','hDiagI2')">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="DiagI2" id="DiagI2" value="No"  onchange="port('DiagI2','hDiagI2')">No</input></label>
			</div>
			</div>

			<div class="hd" id="hDiagI2">
							<input type="text" name="dDiagNoI2"  value="DiagI2" hidden="true">
					 		<div class="form-group">
					 			<label class="control-label col-sm-4">Description</label>
								<div class="col-sm-8">
									<textarea  class="form-control" name="dDescI2" placeholder="Description"></textarea>
					 			</div>
							</div>
			</div>



		<div class="form-group">
		 <label class="control-label col-sm-4"><li> A hernia? If so, describe </li></label>
			<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="DiagI3" id="DiagI3" value="Yes" onchange="port('DiagI3','hDiagI3')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="DiagI3" id="DiagI3" value="No" onchange="port('DiagI3','hDiagI3')">No</input></label>
		</div>
		</div>

		<div class="hd" id="hDiagI3">
						<input type="text" name="dDiagNoI3"  value="DiagI3" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescI3" placeholder="Description"></textarea>
							</div>
						</div>
		</div>


		<div class="form-group">
		 <label class="control-label col-sm-4"><li> Abnormality of the central nervous system (muscular power, reflexes, etc.)? </li></label>
			<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="DiagI4" id="DiagI4" value="Yes" onchange="port('DiagI4','hDiagI4')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="DiagI4" id="DiagI4" value="No" onchange="port('DiagI4','hDiagI4')">No</input></label>
		</div>
		</div>

		<div class="hd" id="hDiagI4">
						<input type="text" name="dDiagNoI4"  value="DiagI4" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescI4" placeholder="Description"></textarea>
							</div>
						</div>
		</div>

		<div class="form-group">
		 <label class="control-label col-sm-4"> <li>Oedema of the ankles?</li></label>
			<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="DiagI5" id="DiagI5" value="Yes" onchange="port('DiagI5','hDiagI5')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="DiagI5" id="DiagI5" value="No" onchange="port('DiagI5','hDiagI5')">No</input></label>
		</div>
		</div>

		<div class="hd" id="hDiagI5">
						<input type="text" name="dDiagNoI5"  value="DiagI5" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescI5" placeholder="Description"></textarea>
							</div>
						</div>
		</div>

		<div class="form-group">
		 <label class="control-label col-sm-4"><li> Inequality or inadequacy of the pulsations of the femoral, dorsalis pedis or
posterial tibial arteries?</li> </label>
		<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="DiagI6" id="DiagI6" value="Yes" onchange="port('DiagI6','hDiagI6')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="DiagI6" id="DiagI6" value="No" onchange="port('DiagI6','hDiagI6')">No</input></label>
		</div>
		</div>

		<div class="hd" id="hDiagI6">
						<input type="text" name="dDiagNoI6"  value="DiagI6" hidden="true">
						<div class="form-group">
							<label class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea  class="form-control" name="dDescI6" placeholder="Description"></textarea>
							</div>
						</div>
		</div>
	</ol>

	<div class="form-group">
	 <label class="control-label col-sm-4"><li> Location:</li> </label>
	<div class="col-sm-8">
		<input type="text" name="RecPlace">
	</div>
	</div>


	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<input type="submit"  value="Save" class="btn btn-success btn-block"/>
	</div>
	</div>
	</form>
