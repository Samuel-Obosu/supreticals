<div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">Personal Information</h3>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="checkout.php?id=sign_up" method="post">
                            <p>
                                <input name="firstname" type="text" id="firstname" placeholder="First Name" required>
                            </p>
                            <p>
                                <input name="lastname" type="text" id="lastname" placeholder="Last Name" required>
                            </p>
                            <p>
                                <input name="email" type="text" id="email" placeholder="Your Email" required> 
                            </p>
                            <p>
                                <input name="contact" type="text" id="contact" placeholder="Your Contact" required> 
                            </p>
                            <hr>

                            <!-- /.personal-form -->
                            <h3 class="widget-title">Organisation Information</h3>
                            <p>
                                <input name="org_name" type="text" id="orgname" placeholder="Name of Organisation" required>
                            </p>
                            <p>
                                <input name="org_email" type="text" id="org_email" placeholder="Email of Organisation" > 
                            </p>
                            <hr>

                            <h3 class="widget-title">Login Information</h3>
                             <p>
                                <input name="password" type="password" id="password" placeholder="Enter Password" required>
                            </p>
                            <p>
                                <input name="password" type="password" id="password" placeholder="Confirm Password" required> 
                            </p>
                            <hr>

                            <h3 class="widget-title">Billing Information</h3>
                             <p>
                                <input name="location" type="text" id="location" placeholder="Location" required>
                            </p>
                            
                            <label  class="control-label col-sm-4" for="rel">Payment Method:</label>
                                <div class="col-sm-8">
                                    <select id="rel" name="payment_method" class="form-control">
                                        <option value="cash" required>Cash on Delivery</option>
                                        <option value="mobile money" required>Mobile Money</option>
                                        <option value="visa" required>Visa Card</option>
                                    </select>
                                </div>
                            <span style="height: 20px;"></span>
                            <input type="submit" class="mainBtn" id="submit" value="Submit">
                        </form>
                    </div> <!-- /.contact-form -->
                </div>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> <!-- /.content-section -->