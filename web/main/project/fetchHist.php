<?php  
	session_start();
	$id=$_GET['q']; 

	include('../dbConnect.php');
			$sql="SELECT ProjectName,Deadline FROM Project WHERE ProjectStatus=\"Completed\"";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pName = $result['ProjectName'];
			$dateComp= $result['Deadline'];

			$sql ="SELECT TypeName FROM ProjectType WHERE PTypeId=(SELECT pTypeID FROM ProjectRequest WHERE ProjectRequestId=$id)";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pType= $result['TypeName'];
		?>
		<section id="introduction">
  			<h2 class="page-header"><a href="#introduction">Project Information</a></h2>
			  <p class="lead">
			    <b>Project Name: </b><?php echo $pName; ?><br>
			    <b>Project Type: </b><?php echo $pType; ?><br>
			    <b>Date Completed: </b><?php echo $dateComp; ?><br>
			  </p>
		</section><!-- /#introduction -->
		<?php 
			//Fetching the descriptions based on the account type
			$accType=$_SESSION['accType'];
			$sql ="SELECT Description, Date FROM ProjectDescription WHERE ProjectRequestId=$id ";
			 
			$data = mysqli_query($connection, $sql);
			//ERROR:$result = mysqli_fetch_assoc($data) had being called already 
		 	while($result = mysqli_fetch_assoc($data)){
	 	 ?>
			<section id="introduction">
	  			<h2 class="page-header"><a href="#introduction">Description</a></h2>
	  				<br><p class="lead"><b>Date Specified: </b><?php echo $result['Date']; ?><br></p>
				  <p class="lead"> <?php echo $result['Description']; ?> </p>
			</section>
		<?php } ?>

		<!-- /#introduction -->
		<?php
			$query= "SELECT * FROM client WHERE ClientID=(SELECT CreatorID FROM projectrequest WHERE ProjectRequestID=$id)";
			$data = mysqli_query($connection,$query);
			$result=mysqli_fetch_assoc($data);
			$name= $result['FirstName']." ". $result['LastName'];
			$contact= $result['Contact'];
			$email= $result['Email'];
		 ?>
		<section id="introduction">
  			<h2 class="page-header"><a href="#introduction">Client Information</a></h2>
			  <p class="lead">
			   <b>Name: </b><?php echo $name; ?><br>
			    <b>Contact : </b><?php echo $contact; ?><br>
			    <b>Email: </b><?php echo $email; ?><br>
			  </p>
		</section><!-- /#introduction -->

