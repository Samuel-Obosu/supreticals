<div class="content body">
<?php
	include('main/dbConnect.php');
	
	?>
		<select onchange="ajaxFunction1(this.value,'main/project/fetchProp.php','desc')">
			<option value="-1">------Choose Project Type--------</option>
		<?php
				 $query="SELECT TypeName,pTypeID FROM projecttype";
				$data1=mysqli_query($connection, $query);
					if(mysqli_num_rows($data1)>=1){		
?>
							<?php while ($result=mysqli_fetch_assoc($data1)) {?>
								<option value="<?php echo $result['pTypeID']; ?>"><?php echo $result['TypeName']; ?></option>
							<?php } ?>
<?php 				}
		
	echo "</select>";
	?>
<div id="desc">
</div>
</div>
