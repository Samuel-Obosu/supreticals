<?php 
	//file for processing modifications made
	$membId=$_SESSION['MemberId'];
	$projectID=$_GET['q']; 
	$role=$_POST['role'];
	$desc =$_POST['description'];
	include('../dbConnect.php');

	while ( $role=$_POST['role']) {
		$sql ="INSERT INTO projectmember(ProjectID,MemberId,Role,RoleDescription) 
		VALUES($projectID,$membId,$role,$desc)";
	}

	$sql ="SELECT member.MemberID,member.FirstName,member.MiddleName,member.LastName
	 FROM member
	 INNER JOIN projectmember 
	 ON projectmember.MemberId= member.MemberID"; 
	echo $sql;
		$data=mysqli_query($connection, $sql);
 ?>
 	<table border="0">
				<tr>
					<th>Member</th>
					<th>Specialty</th>
					<th>Role</th>
				</tr>			
			<?php 

			 	while($result = mysqli_fetch_assoc($data)){
			 		$fName= $result['FirstName'];
					$mName = $result['MiddleName'];
					$lName = $result['LastName'];
					$spec = $result['Speciality'];
					$role =$result['role'];
		 	 ?>

		 	 	<tr>
					<td><?php echo $fName." ".$mName." ".$lName; ?></td>
					<td> <?php echo $spec; ?></td>
					<td> <?php echo $role; ?></td>
				</tr>	
			<?php } ?>
			</table>