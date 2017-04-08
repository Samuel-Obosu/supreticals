<?php  
	session_start();
	$id=$_GET['q']; 

	include('../dbConnect.php');
		$sql ="SELECT member.MemberID,member.FirstName,member.MiddleName,member.LastName, member.Speciality, projectmember.role
			 FROM member
			 INNER JOIN projectmember 
			 ON projectmember.MemberId= member.MemberID";
		$data=mysqli_query($connection, $sql);
		?>		

		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Project Members</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Speciality</th>
                  <th>Role</th>
                </tr>
                </thead>
            <?php 

			 	while($result = mysqli_fetch_assoc($data)){
			 		$fName= $result['FirstName'];
					$mName = $result['MiddleName'];
					$lName = $result['LastName'];
					$spec = $result['Speciality'];
					$role=$result['role'];
		 	 ?>
                <tbody>
                <tr>
                  <td><?php echo $fName." ".$mName." ".$lName;?></td>
                  <td><?php echo $spec ?></td>
                  <td><?php echo $role ?></td>
                  <td>
                  <form>
                  	<input type="button" value="Change Role"
                  	onclick="alert(
                    )">
                  </form>
                  </td>
                </tr>
                </tbody> <?php  }?>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Speciality</th>
                  <th>Role</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        </div>   
    <form action="main/project/addMemb.php" method="post">
		<input type="submit" name="submit" value="Add new Member">
	</form> </a>
    	 

		

