<?php 
  if(isset($_GET['content'])){
    $active = $_GET['content'];
  }
  else{
    $active = "view_orders";
  }
  
  $class1="";
  $class2="";
  $class3="";
  switch ($active) {
    case 'view_orders':
      $class1="active";
      break;
    case 'add_product':
      $class2="active";
      break;
    case 'modify_product':
      $class3="active";
      break;
    
    default:
      # code...
      break;
  }

  $supplier_id = $_SESSION['supplier_id'];
  $sql = "SELECT SupplierName FROM supplier WHERE SupplierID= '$supplier_id'";

  $result = mysqli_query($connection, $sql);
  $data = mysqli_fetch_assoc($result);

 ?>
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $data['SupplierName']; ?></h5>
              	  	
                  <li class="mt">
                      <a class="<?php echo $class1; ?>" href="?content=view_orders">
                          <i class="fa fa-dashboard"></i>
                          <span>View Orders</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="<?php echo $class2; ?>" href="?content=add_product">
                          <i class="fa fa-dashboard"></i>
                          <span>Add New Product</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="<?php echo $class3; ?>" href="?content=modify_product">
                          <i class="fa fa-dashboard"></i>
                          <span>Modify Product Information</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>