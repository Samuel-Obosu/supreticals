<?php 
	session_start();
	$id=$_GET['q']; 
	$memberID = $_SESSION['MemberId'];
	include('../dbConnect.php');
	$sql="SELECT projectrequest.RequestName,projectrequest.ProjectRequestID, client.FirstName,client.LastName FROM client 
	INNER JOIN projectrequest ON client.ClientID=projectrequest.CreatorID WHERE projectrequest.ProjectRequestID IN (SELECT ProjectRequestID FROM project) AND projectrequest.PTypeID=$id";
	$data= mysqli_query($connection,$sql);
	$result=mysqli_fetch_assoc($data);

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
                  <th>Project Name</th>
                  <th>Client Name</th>
                </tr>
                </thead>
            <?php 

			 	while($result = mysqli_fetch_assoc($data)){
			 		$fName= $result['FirstName'];
					$lName = $result['LastName'];
					$rName = $result['RequestName'];
					$id= $result['ProjectRequestID']
		 	 ?>
                <tbody>
                <tr>
                  <td><?php echo $rName ?></td>
                  <td><?php echo $fName." ".$lName;?></td>
                  <td>
                  <form method="post" action="main/project/setComp.php">
                  	<input type="submit" value="Set to Complete">
                  </form>
                  </td>
                </tr>
                </tbody> <?php  }?>
                <tfoot>
                <tr>
                  <th>Project Name</th>
                  <th>Client Name</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        </div>   
<?php
	$_SESSION['reqId']=$id;
 ?>
