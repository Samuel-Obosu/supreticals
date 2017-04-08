<?php

		$sql="SELECT * FROM patienthist WHERE Pid='$pid'";
		$res=mysqli_query($connection, $sql);
		$row=array();

		if(mysqli_num_rows($res)==1){
				$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
		}else{
			echo "Multiple rows";
		}

		//print_r($row);
 ?>

<form class="form-horizontal">
	<dl>
	<ol type="A">

		<dt><li> Has the person ever been treated for, or been told by a member of the medical profession that the person has:</li></dt>
		<dd><ol type="1">
		<div class="form-group">
		<label class="control-label col-sm-4"><!--1--> <li>Pain, pressure, or discomfort in the chest or arms; high blood pressure; heart murmur; irregular heartbeat; or any other disease or disorder of the heart?</li></label>
			<?php cdisp('DiagA1'); ?>


		<div class="form-group">
		<label class="control-label col-sm-4"> <!--2--> <li>Anemia; leukemia; or any other disorder of the blood, veins or arteries?</li></label>
			<?php cdisp('DiagA2'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--3--> <li>Asthma; bronchitis; pneumonia; tuberculosis; emphysema; shortness of breath; chronic cough, or any other disorder of the lungs or respiratory system?</li></label>
		<?php cdisp('DiagA3'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--4--> <li>Mental or emotional disorder, nervous breakdown; epilepsy; convulsions; chronic fatigue; fainting spells; paralysis; stroke; or any other disorder of the brain or nervous system?</li></label>
		<?php cdisp('DiagA4'); ?>


		<div class="form-group">
		<label class="control-label col-sm-4"><!--5--> <li>Significant weight loss; ulcer; colitis; diverticulitis; hepatitis; cirrhosis; persistent diarrhea; or other disease of the liver, gall bladder, pancreas, stomach or intestines?</li></label>
		<?php cdisp('DiagA5'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--6--><li> Diabetes; thyroid; recurrent enlarged glands; or other glandular disease or disorder?</li></label>
		<?php cdisp('DiagA6'); ?>


		<div class="form-group">
		<label class="control-label col-sm-4"><!--7--><li> Arthritis; gout; or any bone, joint, muscle, or skin disorder?</li></label>
		<?php cdisp('DiagA7'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--8--><li> Polyp, tumor, or cancer?</li></label>
		<?php cdisp('DiagA8'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--9--><li>  Disorder of the urinary tract or kidneys; urethritis; cystitis; sugar, albumin, or blood in the urine?</li></label>
			<?php cdisp('DiagA9'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--10.--><li> Prostate or testicular disease; venereal disease, herpes; or disease of the uterus, ovaries or breasts?</li></label>
		<?php cdisp('DiagA10'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--11--><li>  Any disorder of the eyes, ears, nose, or throat?</li></label>
		<?php cdisp('DiagA11'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--12--><li>  Any other health impairment or medically or surgically treated condition within the last 5 years not mentioned above?</li></label>
		<?php cdisp('DiagA12'); ?>
	</ol></dd>


		<div class="form-group">
		<dt><label class="control-label col-sm-4"><b><!--B--> </b><li> Has the person ever been treated for, or been told by a licensed member of the medical profession that the person has, Acquired Immune Deficiency Syndrome (AIDS) or any disorder or deficiency of the immune system?</li></label>
				<?php cdisp('DiagB'); ?></dt>

		<dt><b><!--C--> </b><li> Within the past 10 years, has the person:</li></dt>
		<dd><ol type="1">
		<div class="form-group">
		<label class="control-label col-sm-4"><!--1--><li> Tested positive in a test to detect antibodies to the AIDS virus (Human Immunodeficiency Virus (HIV), Human T-Cell Lymphotrophic virus type III (HTLVIII)?</li></label>
			<?php cdisp('DiagC1'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--2--><li> Had a blood transfusion?</li></label>
			<?php cdisp('DiagC2'); ?>		</ol></dd>

		<dt><div class="form-group">
		<label class="control-label col-sm-4"><b><!--D--> </b><li> Within the past 5 years, has the person been a patient in or had treatment at a hospital, clinic, sanitarium or other medical facility?</li></label>
			<?php cdisp('DiagD'); ?></dt>

		<dt><div class="form-group">
		<label class="control-label col-sm-4"><!--b>E.</b--><li> Is the person now under regular medical observation by, or taking treatment from, a member of the medical profession?</li></label>
			<?php cdisp('DiagE'); ?></dt>

		<dt><b><!--F--> </b><li> Other than as stated in the previous answers, has the person, within the last 5 years:</li></dt>
		<dd><ol type="1">
		<div class="form-group">
		<label class="control-label col-sm-4"><!--1--><li> Had a check-up or consultation with a member of the medical profession?</li></label>
				<?php cdisp('DiagF1'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--2--><li> Had an electrocardiogram, X-ray, blood test or other test?</li></label>
			<?php cdisp('DiagF2'); ?>

		<div class="form-group">
		<label class="control-label col-sm-4"><!--3--><li> Been advised by a member of the medical profession to have any diagnostic test, hospitalization, or surgery which was not completed?</li></label>
			<?php cdisp('DiagF3'); ?>
		</ol></dd>

		<dt><div class="form-group">
		<b><!--G--> </b><li><label class="control-label col-sm-4"> Does the person have a deformity or an amputation?</li></label>
			<?php cdisp('DiagG'); ?></dt>

		<dt><div class="form-group">
		<label class="control-label col-sm-4"><b><!--H--> </b><li> Does the person now take any medicine prescribed by a member of the medical profession?</li></label>
			<?php cdisp('DiagH'); ?></dt>

		<dt><div class="form-group">
		<label class="control-label col-sm-4"><!--b>I.</b--><li> Except as legally prescribed by a physician, has the person used narcotics, cocaine, marijuana, or any hallucinatory or mind-altering substances in the past 10 years?</li></label>
			<?php cdisp('DiagI'); ?></dt>

		<dt><div class="form-group">
		<label class="control-label col-sm-4"><!--b>J.</b--><li> In the last 5 years, has the person received treatment for, or joined an organization because of, the alcoholism or drug addiction of that person?</li></label>
		<?php cdisp('DiagJ'); ?></dt>

		<dt><div class="form-group">
		 <label class="control-label col-sm-4"><b><!--K--> </b> <li>Have you been diagnosed of heptatis B?</li></label>
		 <?php cdisp('hepB'); ?></dt>

		 <div class="form-group">
			<label class="control-label col-sm-4"><b><!--K--> </b>
		  <li>Have you ever been immunized for Hepatitis B?</li></label>
			<?php cdisp("hepb_diag"); ?></dt>

			<?php if($row['hepb_diag']=='yes'){ ?>
			<dt><div class="form-group">
			<label class="control-label col-sm-4">Description:</label>
			<?php cdisp("hepb_diag_fur"); } ?></dt>
		<dt><!--div class="form-group">
		<label class="control-label col-sm-4"><b--><!--K--> <!--/b><li> Family information <1> Has any parent, brother, or sister of the person ever had cancer, diabetes, high blood pressure, heart or kidney disease, nervous or mental disorder, tuberculosis, or hereditary disorder?</li></label>
			<?php //cdisp('DiagK1'); ?></dt-->

			<dt><?php dispFam(); ?></dt>
	</ol>
</dl>


	</form>
