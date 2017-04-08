<?php  
	session_start();
	$id=$_GET['q']; 

	include('../dbConnect.php');
		$sql ="SELECT TypeName FROM ProjectType WHERE PTypeId=(SELECT DISTINCT pTypeID FROM ProjectRequest WHERE PTypeID=$id)";
		echo $sql;
		$data=mysqli_query($connection, $sql);
		$result=mysqli_fetch_assoc($data);
		$pType= $result['TypeName'];

		$sql="SELECT RequestName, Deadline FROM ProjectRequest WHERE pTypeID=$id";
		echo $sql;
		$data=mysqli_query($connection, $sql);
		$result=mysqli_fetch_assoc($data);
		$rName = $result['RequestName'];
		$deadline= $result['Deadline'];
		//while($result = mysqli_fetch_assoc($data)){
			?>
			<section id="introduction">
	  			<h2 class="page-header"><a href="#introduction">Project Information</a></h2>
				  <p class="lead">
				    <b>Project Name: </b><?php echo $rName ; ?><br>
				    <b>Project Type: </b><?php echo $pType; ?><br>
				    <b>Date Completed: </b><?php echo $deadline; ?><br>
				  </p>
			</section><!-- /#introduction -->

			<?php 
			
			$sql ="SELECT Description, Date FROM ProjectDescription WHERE ProjectRequestId IN(SELECT ProjectRequestId FROM projectrequest WHERE pTypeID=$id) GROUP BY ProjectRequestId";
			echo $sql; 
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
				$query= "SELECT * FROM client WHERE ClientID IN(SELECT DISTINCT CreatorID FROM projectrequest WHERE pTypeID=$id) GROUP BY ClientID";
				echo $query;
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

			<script type="text/javascript">
				function dbInsert(){
					<?php
						$sql = "INSERT INTO project(ProjectRequestID,Deadline,ProjectName) 
						VALUES( SELECT ProjectRequestID,Deadline,RequestName FROM projectrequest WHERE ProjectRequestID=$id; )";
						echo $sql;

						$data=mysqli_query($connection,$sql);
						if($data){
							//header("location: ../../starter.php?page=viewProposal");
							}
 					?>
				}

			</script>

			<form  method="post">
				<input type="submit" name="submit" value="Accept Project" onclick="dbInsert();">
			</form>

		<?php 
		//	}
		 ?>

