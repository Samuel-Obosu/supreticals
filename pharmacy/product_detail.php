<?php  
    if(isset($_GET['pID'])){
        $pID = $_GET['pID'];    
    }
    else{
        $pID = 1;
    }
    
    $sql ="SELECT ProductID, ProductName, Description, UnitPrice FROM products WHERE ProductID = $pID";
    $data = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($data);
 ?>

<div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-image">
                        <img src="images/featured/7.jpg" alt="">
                    </div> <!-- /.product-image -->
                    <div class="product-information">
                        <h2><?php echo $result['ProductName']; ?></h2>
                        <p><?php echo $result['Description']; ?></p>
                        <p class="product-infos">
                            <span>Unit Price: <?php echo $result['UnitPrice']; ?></span>
                        </p>
                        <ul class="product-buttons">
                            <li>
                                <a href="#" class="main-btn">Buy Now</a>
                            </li>
                            <li>
                                <a href="#" class="main-btn">Add to Cart</a>
                            </li>
                        </ul>
                    </div> <!-- /.product-information -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-4 col-sm-8">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/1.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Name Of Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$30.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/2.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Name Of Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$40.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/8.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Name Of Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$50.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->