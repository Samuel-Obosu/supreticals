<?php 
    $id = $_SESSION['supplier_id'];
    $sql = "SELECT * FROM tblorder a JOIN retailer b ON a.RetailerID = b.RetailerID JOIN products c ON a.ProductID= c.ProductID WHERE a.SupplierID = $id ORDER BY a.orderID ASC";
    //echo $sql;
    $result = mysqli_query($connection, $sql);
 ?>

  <div class="row mt" style="margin: 0px; margin-left: 200px; margin-top:50px; ">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Orders</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Product Name</th>
                                  <th><i class="fa fa-bookmark"></i> Unit Price</th>
                                  <th><i class=" fa fa-edit"></i> Customer Name</th>
                                  <th><i class=" fa fa-edit"></i> Contact</th>
                                  <th><i class=" fa fa-edit"></i> Location</th>
                                  <th><i class=" fa fa-edit"></i> Payment Mode</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                                while ($data = mysqli_fetch_assoc($result)) {
                                  
                              ?>
                              <tr>
                                  <td><a href="#"><?php echo $data['ProductName']; ?></a></td>
                                  <td class="numeric"><?php echo $data['Quantity']; ?> </td>
                                  <td><?php echo $data['FirstName'] ." ". $data['LastName']; ?> </td>
                                  <td class="numeric"><?php echo $data['Contact']; ?> </td>
                                  <td><?php echo $data['Location']; ?> </td>
                                  <td><?php echo $data['PaymentMode']; ?> </td>
                                  <td>
                                      <a id="remove" onclick="checker();" type="<?php echo $data['orderID']; ?>" href=""><button id="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          <script type="text/javascript">
                            function checker(){
                              var order_id = document.getElementById("remove").type;
                              var string = "remove_order.php?order_id="+ order_id;
                              if(confirm("Are you sure this order has been delivered?")==true){
                                document.getElementById("remove").href=string;
                              }
                            }
                          </script>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->