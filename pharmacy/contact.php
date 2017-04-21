<div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">Contact Us</h3>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="feedback.php" method="post">
                            <p>
                                <input name="name" type="text" id="name" placeholder="Your Name" required>
                            </p>
                            <p>
                                <input name="email" type="text" id="email" placeholder="Your Email" required> 
                            </p>
                            <p>
                                <input name="subject" type="text" id="subject" placeholder="Subject" required> 
                            </p>
                            <p>
                                <textarea name="message" id="message" placeholder="Message" required></textarea>    
                            </p>
                            <input type="submit" class="mainBtn" id="submit" value="Send Message" required>
                        </form>
                    </div> <!-- /.contact-form -->
                </div>
                <div class="col-md-7 col-sm-6 map-wrapper">
                    <h3 class="widget-title">Our Location</h3>
                    <div class="map-holder" style="height: 360px"></div>
                </div>
            </div>
        </div>
    </div> <!-- /.content-section -->
    <?php 
        $sql = "SELECT * FROM products p JOIN supplier s on p.SupplierID = s.SupplierID ORDER BY p.ProductID DESC LIMIT 4";
        $result = mysqli_query($connection, $sql);

     ?>

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
