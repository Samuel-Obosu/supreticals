<div class="content body">
	<?php include('main/dbConnect.php') 


	?>
	<form action="main/project/addIntProj.php" method="post">
		<p>Project Name: </p><input type="text" name="pName">
		<p>Deadline: </p><input type="date" name="deadline">
	</form>
	<?php 
		$sql ="SELECT MemberID, FirstName, LastName,MiddleName,Speciality FROM member WHERE AccountStatus='active'";
		$data=mysqli_query($connection, $sql);
	 ?>
	 <h3>Assign Member Roles</h3>
	<table border="0">
				<tr>
					<th>Member</th>
					<th>Specialty</th>
					<th>Role</th>
					<th>Role Description</th>
				</tr>			
			<?php 
				$result = mysqli_fetch_assoc($data);
			 	while($result = mysqli_fetch_assoc($data)){
			 		$fName= $result['FirstName'];
					$mName = $result['MiddleName'];
					$lName = $result['LastName'];
					$spec = $result['Speciality'];
		 	 ?>

		 	 	<tr>
					<td><?php echo $fName." ".$mName." ".$lName; ?></td>
					<td> <?php echo $spec; ?></td>
					<td>
						<form action="main/project/addIntProj.php" method="post">
							<input type="text" name="role">
						</form>
					</td>
					<td>
						<form action="main/project/addIntProj.php" method="post">
							<input type="text" name="description">
						</form>
					</td>
				</tr>	
			<?php } ?>
	</table>
			<form action="main/project/addIntProj.php" method="post">
				<input type="submit" name="submit" value="Done">
			</form>
</div>