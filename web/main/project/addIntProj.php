<?php 
	session_start();
	//file for adding internal project to db
	// i dont know the reason for the errors from line 5-10
	include('../dbConnect.php');
	$membId=$_SESSION['MemberId'];
	$projectID=$_GET['q']; // i dont know if this is right
	$role=$_POST['role'];
	$desc =$_POST['description'];
	$deadline=$_POST['deadline'];
	$pName= $_POST['pName'];
	
	$query="INSERT INTO project(DateAccepted, Deadline,ProjectName,MemberID,ProjectStatus) VALUES(date(),$deadline,$pName,$membId,'Active' ) ";

	while ( $role=$_POST['role']) {
		$sql ="INSERT INTO projectmember(ProjectID,MemberId,Role,RoleDescription) 
		VALUES($projectID,$membId,$role,$desc)";
	}

	$sql ="SELECT member.MemberID,member.FirstName,member.MiddleName,member.LastName, member.Speciality, projectmember.role
	 FROM member
	 INNER JOIN projectmember 
	 ON projectmember.MemberId= member.MemberID";
	echo $sql;
		$data=mysqli_query($connection, $sql);
 ?>

 	<table border="0">
				<tr>
					<th>Member</th>
					<th>Speciality</th>
					<th>Role</th>
				</tr>			
			<?php 
				$result = mysqli_fetch_assoc($data);
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