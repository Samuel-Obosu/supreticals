<?php  
	session_start();
	$id=$_GET['q']; 
	$memberID = $_SESSION['MemberId'];
	if($id>0){
			//fetching PROJECTNAME, TYPENAME, DEADLINE 
			//based on the selected ProjectRequestId  
			include('../dbConnect.php');
			$sql="SELECT ProjectName FROM Project WHERE ProjectRequestId=$id";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pName = $result['ProjectName'];


			$sql ="SELECT TypeName FROM ProjectType WHERE PTypeId=(SELECT pTypeID FROM ProjectRequest WHERE ProjectRequestId=$id)";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pType= $result['TypeName'];

			$sql = "SELECT Deadline FROM ProjectRequest WHERE ProjectRequestId =$id";
			$data=mysqli_query($connection, $sql);
			$result=mysqli_fetch_assoc($data);
			$pDead = $result['Deadline'];

			$sql="SELECT FirstName,LastName FROM member WHERE MemberID=$memberID";
			$data=mysqli_query($connection,$sql);
			$result=mysqli_fetch_assoc($data);
			$name=$result['FirstName']." ".$result['LastName'];

		?>
		<?php 
			//Fetching the descriptions based on the account type
			$accType=$_SESSION['accType'];
			$sql ="SELECT Description, Date FROM ProjectDescription WHERE ProjectRequestId=$id" ;
			 if($accType== "associate"){
			  	$sql .= "ORDER BY DescriptionID DESC LIMIT 1";
			  }
			 
			$data = mysqli_query($connection, $sql);
			//ERROR:$result = mysqli_fetch_assoc($data) had being called already 
			$num=1;
		 	//echo $sql;
	 	 ?>
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Description Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Number</th>
                  <th>Date Specified</th>
                  <th>Personnel</th>
                </tr>
                </thead>
            <?php while($result = mysqli_fetch_assoc($data)){
		 		/*$sql ="SELECT Description, Date FROM ProjectDescription WHERE ProjectRequestId=1 AND DescriptionID=$num" ;
		 		$data = mysqli_query($connection, $sql);
		 		$result1 = mysqli_fetch_assoc($data);*/
		 		$desc= $result['Description'];
		 		 ?>
		 		<p id="desc"> <?php //echo $desc; ?> </p>
                <tbody>
                <tr>
                  <td><?php echo $num?></td>
                  <td><?php echo $result['Date'] ?></td>
                  <td><?php echo $name ?></td>
                  <td>
                  <form>
                  	<input type="button" value="View Description"
                  	onclick="alert('<?php echo $desc ?>') ">
                  </form>
                  </td>
                </tr>
                </tbody><?php
						$num+=1;
						//echo $desc;
					} ?>
                <tfoot>
                <tr>
                  <th>Number</th>
                  <th>Date Specified</th>
                  <th>Personnel</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        </div>   
	<h3> Add New Description</h3>
      <form method="post" action="main/project/updateDesc.php">
        <textarea name="description" placeholder="Enter Description" style="height: 400px; width: 600px;"></textarea>
		<br>
		<input type="submit" value="Done" />
      </form>
    </div>
  </div>
  	<?php $_SESSION['descId']=$num; 
  			$_SESSION['id']=$id;
  	?>
<?php }else{ echo " <br><big><b>Please Choose A Project</b></big>"; } ?>

