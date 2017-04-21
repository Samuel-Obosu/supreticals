<?php 
	$id = $_SESSION['supplier_id'];
	$sql = "SELECT * FROM products WHERE SupplierID = $id";
	$result = mysqli_query($connection, $sql);

 ?>

	<section id="main-content">
          <section class="wrapper">
      		<div class="row mt">
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<! -- BASIC PROGRESS BARS -->

      				<?php while($data = mysqli_fetch_assoc($result)){ ?>

	      				<div class="showback">
	      					<h4><i class="fa fa-angle-right"></i> <?php echo $data['ProductName']; ?></h4>
					            <p><?php echo $data['Description']; ?></p>
					            <p>Unit Price: <?php echo $data['UnitPrice']; ?></p>
					            <p>Quantity Available: <?php echo $data['ProductQty']; ?></p>
	      				</div><!--/showback -->
	      				<p>
	      					<?php //sending product Id to the edit product page ?>
	      					<a href="?content=edit_product&product_id=<?php echo $data['ProductID']; ?>"><button id="" type="button" class="btn btn-primary">Edit Details</button></a>
	      				</p>
      				<?php } ?>
      			</div><! --/col-lg-6 -->
      		</div><!--/ row -->
          </section><! --/wrapper -->
      </section>
<script type="text/javascript">
	
</script>