<?php 
    $sql = "SELECT * FROM products p JOIN supplier s on p.SupplierID = s.SupplierID";
    $result = mysqli_query($connection, $sql);
    if(isset($_GET['message'])){
        $message= $_GET['message'];
    }
    else{
        $message ="No orders yet !";
    }
    
?>

<div class="content-section">
    <div class="col-md-12 section-title">
        <h3><?php echo $message ?></h3>
    </div>

    </div> <!-- /.content-section -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>New Products</h2>
                </div> <!-- /.section -->
            </div> <!-- /.row -->
            <div class="row">
            <?php 
                while($data = mysqli_fetch_assoc($result)){

                    $pID = $data['ProductID'];
                    $pName = $data['ProductName'];
                    $price = $data['UnitPrice'];
                    $pID = $data['ProductID'];
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/products/<?php echo $pID; ?>.jpg" alt="<?php echo $pName; ?>">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="?content=product_detail&pID=<?php echo $pID; ?>"><?php echo $pName; ?></a></h5>
                            <span class="price">$<?php echo $price; ?></span>
                            <span class="price">Available Quantity: <?php echo $data['ProductQty']; ?></span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->

            <?php 
                }
            ?>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->
