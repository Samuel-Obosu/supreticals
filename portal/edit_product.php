<?php  $product_id = $_GET['product_id']; 
		$sql = "SELECT * FROM products WHERE ProductID = '$product_id'";
		$result = mysqli_query($connection, $sql);
		$data = mysqli_fetch_assoc($result);
?>
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $data['ProductName']; ?></h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Change Product Information</h4>
                      <form class="form-horizontal style-form" action="update_info.php?product_id=<?php echo $product_id; ?>" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Change Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="product_name" class="form-control" placeholder="New Product Name">
                              </div>
                              
                              <label class="col-sm-2 col-sm-2 control-label">Update Description</label>
                              <div class="col-sm-10">
                                  <textarea name="description" id="" cols="80" rows="20" placeholder="New Description"></textarea>
                              </div>

                              <label class="col-sm-2 col-sm-2 control-label">Change Unit Price</label>
                              <div class="col-sm-10">
                                  <input type="number" name="price" class="form-control" placeholder="New Price">
                              </div>

                              <label class="col-sm-2 col-sm-2 control-label">Change Quantity</label>
                              <div class="col-sm-10">
                                  <input type="number" name="quantity" class="form-control" placeholder="New Quantity Available">
                              </div>
                              <input type="submit" class="btn btn-primary btn-lg" value= "SAVE">

                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	</section><! --/wrapper -->
</section>

<?php 
	
 ?>