<div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">Login or Sign-Up</h3>
                    <?php 
                        if(isset($_GET['message'])){
                            $message = $_GET['message'];
                        }
                        else{
                            $message="";
                        }

                         ?>
                    <h6 id="message" style="background-color: red;"><?php echo $message ?></h6>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="login_validation.php" method="post">
                            <p>
                                <input name="email" type="email" id="email" placeholder="Your Email" required> 
                            </p>
                            <p>
                                <input name="password" type="password" id="password" placeholder="Password" required> 
                            </p>
                            <label  class="control-label col-sm-4" for="rel">Payment Method:</label>
                                <div class="col-sm-8">
                                    <select id="rel" name="payment_method" class="form-control">
                                        <option value="cash" required>Cash on Delivery</option>
                                        <option value="mobile money" required>Mobile Money</option>
                                        <option value="visa" required>Visa Card</option>
                                    </select>
                                </div>
                            <input type="submit" class="mainBtn" id="submit" value="Login">
                            <hr>
                            <a href="?content=sign_up"><input type="button" class="mainBtn" id="submit" value="Sign-Up"></a>
                        </form>
                    </div> <!-- /.contact-form -->
                </div>
            </div>
        </div>

    </div> <!-- /.content-section -->