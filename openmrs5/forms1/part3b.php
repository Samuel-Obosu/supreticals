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
		<div class="form-group">
		<label  class="control-label col-sm-4" ><li> Record made by:</li></label>
		<?php
			$sql = "SELECT * FROM personel WHERE RecPid=(SELECT RecPId FROM currentstate WHERE Pid='$pid')";
			$res=mysqli_query($connection, $sql);
			$data= mysqli_fetch_assoc($res);
			$name= $data['FullName'];
			echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>Dr. {$name}</label></div>";
		?>

		<!-- A -->
		<div class="form-group">
			<label  class="control-label col-sm-4" ><li> Height:</li></label>
			<?php ndisp("DiagA1"); ?>


		<div class="form-group">
		 <label class="control-label col-sm-4" >Weight:</label>
		 	<?php ndisp("DiagA2"); ?>


			<div class="form-group">
			 <label class="control-label col-sm-4" >Temperature:</label>
				<?php ndisp("temp"); ?>


			<div class="form-group">
				 <label class="control-label col-sm-4"> <!--C--><li>BMI</li></label>
				<?php ndisp("Bmi"); ?>

		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--B--><li>Pulse</li></label>
		 	<?php ndisp("DiagB1"); ?>



		<div class="form-group">
		 	<label class="control-label col-sm-4">Pulse</label>
		 	<?php ndisp("DiagB2"); ?>


		<!--div class="form-group">
		 <label class="control-label col-sm-4">Irregular</label-->
		 <?php //ndisp("DiagB3"); ?>

			<hr>



		<div class="form-group">
			 <label class="control-label col-sm-4"> <!--C--><li>Blood pressure(seated)</li></label>
			<?php echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>"
					.ndisp("DiagC1A")."/".ndisp("DiagC1B")."</label></div>"; ?>

</form>

		<div class="form-group">
			<label class="control-label col-sm-4"> Blood pressure (2nd)</label>
			<?php echo "<label class='control-label col-sm-8' style='color:SkyBlue; text-align:left;'>"
					.ndisp("DiagC2A")."/".ndisp("DiagC2B")."</label></div>"; ?>

		<hr>

	<div class="form-group">
		<label class="control-label  col-sm-6"><!--D--> <li>Urinalysis(Please fill in blanks or attach results and forward with this form)</li></label>
	</div>
			<div class="form-group">
		 <label class="control-label col-sm-4">Protein</label>
		 <?php ndisp("DiagD1"); ?>

			<div class="form-group">
		 <label class="control-label col-sm-4">Sugar</label>
		 <?php ndisp("DiagD2"); ?>


		<div class="form-group">
		 <label class="control-label col-sm-4">Blood</label>
		 <?php ndisp("DiagD3"); ?>

		 <div class="form-group">
 		 <label class="control-label col-sm-4">Abdominal Circumference</label>
 		 <?php ndisp("abdominal"); ?>

		<hr/>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--F--><li>Have you ever used any type of tobacco or nicotine product?</li>
		 </label>
		 <?php ndisp("DiagF"); ?>
		<hr>

		<div class="form-group">
		 <label class="control-label  col-sm-4"><!--G --><li>Is there any abnormality: </li></label>
	 </div>
			<ol type="1">
				<div class="form-group">
			 	<label class="control-label col-sm-4"> <li>Of the oral cavity, eyes, ears, nose, throat, skin (including xanthelasma, xanthomata, arcus senilis)?</li> </label>
				<?php ndisp("DiagG1"); ?>


				<div class="form-group">
				<label class="control-label col-sm-4"> <li>Of the lymph nodes or the thyroid gland?</li></label>
				<?php ndisp("DiagG2"); ?>

			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Of chest, spine or extremities? </li></label>
			 <?php ndisp("DiagG3"); ?>


			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Of lungs on percussion and auscultation?</li></label>
			 <?php ndisp("DiagG4"); ?>

	</ol>
		<hr>

		<div class="form-group">
		 <label class="control-label col-sm-4"><!--H--> <li>Are any murmurs present?</li> </label>
		 <?php ndisp("DiagH"); ?>


		<hr>
		<!-- I -->
		<div class="form-group">
		<label class="control-label  col-sm-4"><li> Is there:</li>  </label>
	</div>
			<ol type="1">

				<div class="form-group">
				 <label class="control-label col-sm-4"> <li>Intra-abdominal abnormality?</li></label>
				 <?php ndisp("DiagI1"); ?>



			<div class="form-group">
			 <label class="control-label col-sm-4"><li> Any surgical scars?</li> </label>
			 <?php ndisp("DiagI2"); ?>


		<div class="form-group">
		 <label class="control-label col-sm-4"><li> A hernia? If so, describe </li></label>
		 <?php ndisp("DiagI3"); ?>


		<div class="form-group">
		 <label class="control-label col-sm-4"><li> Abnormality of the central nervous system (muscular power, reflexes, etc.)? </li></label>
		 <?php ndisp("DiagI4"); ?>

		<div class="form-group">
		 <label class="control-label col-sm-4"> <li>Oedema of the ankles?</li></label>
		 <?php ndisp("DiagI5"); ?>

		<div class="form-group">
		 <label class="control-label col-sm-4"><li> Inequality or inadequacy of the pulsations of the femoral, dorsalis pedis or
posterial tibial arteries?</li> </label>
		<?php ndisp("DiagI6"); ?>
	</ol>
<hr>

	<div class="form-group">
	 <label class="control-label col-sm-4"><li> Location:</li> </label>
	 <?php ndisp("RecPlace"); ?>
<!--hr-->
