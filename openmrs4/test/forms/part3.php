<?php include('cdetail.php'); ?>

<form class="form-horizontal">
		<ol type="A">
		<!-- A -->
		<div class="form-group">
			<label  class="control-label col-sm-4" ><li> Height:</li></label>
			<div class="col-sm-8">
				<input type="number" class="form-control" name="DiagA1" placeholder ="(m)">
			</div>
		</div>

		<div class="form-group">
		 <label class="control-label col-sm-4" >Weight:</label>
		 	<div class="col-sm-8">
				<input type="number" class="form-control" name="DiagA2" placeholder="(kg)">
			</div>
		</div>


		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--B--><li>Pulse</li></label>
		 	<div class="col-sm-8">
				<input type="number"  class="form-control" name="DiagB1" placeholder="per minute">
			</div>
		</div>


		<div class="form-group">
		 	<label class="control-label col-sm-4">Regular</label>
		 	<div class="col-sm-8">
				<label class="radio-inline"><input type="radio" name="DiagB2" value="Yes">Yes</input></label>
				<label class="radio-inline"><input type="radio" name="DiagB2" value="No">No</input></label>
			</div>
		</div>

		<div class="form-group">
		 <label class="control-label col-sm-4">Irregular</label>
		 <div class="col-sm-8">
			<label class="radio-inline"><input type="radio" name="DiagB3" value="Yes">Yes</input>
			</label>
			<label class="radio-inline"><input type="radio" name="DiagB3" value="No">No</input>
			</label>
			</div>
		</div>
			<hr>



		<div class="form-group">
			 <label class="control-label col-sm-4"> <!--C--><li>Blood pressure(seated)</li></label>
			 <div class="col-sm-8">
				<input type="text" class="form-control" placeholder="000/000" name="DiagC1">
			 </div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4"> Blood pressure (2nd)</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="000/000" name="">
			</div>
</div>


		<hr>


		<label><!--D--> <li>Urinalysis(Please fill in blanks or attach results and forward with this form)</li></label>
		<div class="form-group">
		 <label class="control-label col-sm-4">Protein</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="">
		 	</div>
		 <label class="control-label col-sm-4">Sugar</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="">
		 	</div>
		 <label class="control-label col-sm-4">Blood</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="">
			</div>
		</div>


		<hr>
		<div class="form-group">
		 <label class="control-label col-sm-4"><!--E--> <li>Does the person use any type of tobacco or nicotine product?</li>
		 </label>
		 <div class="col-sm-8">
			<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
		</div>


		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--F--><li>Have you ever used any type of tobacco or nicotine product?</li>
		 </label>
		 <div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="tob" id="tob" value="Yes" onchange="port('tob', 'ifYes')">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="tob" id="tob" value="No" onchange="port('tob', 'ifYes')" >No</input></label>
		</div>
		</div>

		<!--div class="hd" id="ifYes">
		<div class="form-group">
		 <label class="control-label col-sm-4">If "Yes", provide date last used</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="">
		 	</div>
		</div>
	</div-->


		<hr>


		 <label><!--G --><li>Is there any abnormality: </li></label>
			<br>
			<ol type="1">
				<div class="form-group">
			 	<label class="control-label col-sm-4"> <li>Of the oral cavity, eyes, ears, nose, throat, skin (including xanthelasma, xanthomata, arcus senilis)?</li> </label>
			 	<div class="col-sm-8">
				<label class="radio-inline"><input type="radio" name="DiagG1" id="DiagG1" value="Yes" >Yes</input></label>
				<label class="radio-inline"><input type="radio" name="DiagG1" id="DiagG1" value="No" >No</input></label>
				</div>
				</div>
			<div class="hd" id="HDiag">
			<?php displDet('DiagG1'); ?>
		</div>

				<div class="form-group">
				<label class="control-label col-sm-4"> <li>Of the lymph nodes or the thyroid gland?</li></label>
				<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
				<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
				</div>


			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Of chest, spine or extremities? </li></label>
			<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
			</div>


			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Of lungs on percussion and auscultation?</li></label>
			<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
			<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
			</ol>

		<hr>
		<div class="form-group">
		 <label class="control-label col-sm-4"><!--H--> <li>Are any murmurs present?</li> </label>
		 <div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
			</div>
		</div>

		<hr>
		<!-- I -->
		<label><li> Is there:</li>  </label><br>
			<ol type="1">

				<div class="form-group">
				 <label class="control-label col-sm-4"> <li>Intra-abdominal abnormality?</li></label>
				 <div class="col-sm-8">
					<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
				<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
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
							<input type="text" name="dDiagNo"  value="DiagI2" hidden="true">

					 		<div class="form-group">
					 			<label class="control-label col-sm-4">Description</label>
								<div class="col-sm-8">
									<textarea  class="form-control" name="Desc" placeholder="Description"></textarea>
					 			</div>
							</div>

			</div>



		<div class="form-group">
		 <label class="control-label col-sm-4"><li> A hernia? If so, describe </li></label>
			<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
		</div>



		<div class="form-group">
		 <label class="control-label col-sm-4"><li> Abnormality of the central nervous system (muscular power, reflexes, etc.)? </li></label>
			<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
		</div>


		<div class="form-group">
		 <label class="control-label col-sm-4"> <li>Oedema of the ankles?</li></label>
			<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
		</div>



		<div class="form-group">
		 <label class="control-label col-sm-4"><li> Inequality or inadequacy of the pulsations of the femoral, dorsalis pedis or
posterial tibial arteries?</li> </label>
		<div class="col-sm-8">
		<label class="radio-inline"><input type="radio" name="" value="Yes">Yes</input></label>
		<label class="radio-inline"><input type="radio" name="" value="No">No</input></label>
		</div>
		</div>
	</ol>
	</form>
