<?php 
    $sql = "SELECT ProductID, SupplierID, ProductName, UnitPrice FROM products";
    echo $sql;
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    $supID = $data['SupplierID'];

    $sql_1 = "SELECT supName FROM supplier WHERE SupplierID=$supID";
    echo $sql_1;
    $result_1 = mysqli_query($connection, $sql_1);
    $data_1 = mysqli_fetch_assoc($result_1);
    $supName = $data_1['supName'];
?>

<div class="content-section">

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
                    $_SESSION['pID'] = $data['ProductID'];
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/products/<?php echo $pID; ?>.jpg" alt="<?php echo $pName; ?>">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="?content=product_detail"><?php echo $pName; ?></a></h5>
                            <span class="price">$<?php echo $price; ?></span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->

            <?php 
                }
            ?>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->
