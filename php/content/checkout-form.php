
<form action="<?php echo $level.data_path."addbill.php" ?>" class="checkout-form" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name<span>*</span></label>
                                <input type="text" name="fir">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span>*</span></label>
                                <input type="text" name="last">
                            </div>
                          
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input type="text" name="cun">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Adwdress<span>*</span></label>
                                <input type="text" name="street" class="street-first">
                                <input type="text">
                            </div>
                            
                            <div class="col-lg-12">
                                <label for="town">Town / City<span>*</span></label>
                                <input type="text" name="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" name="phone">
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    <?php
                                        $checkcart=false;
                                        $total=0;
                                        if(isset($_SESSION['cart']))
                                        {
                                            foreach($_SESSION['cart'] as $k)
                                            {
                                                if(isset($k))
                                                {
                                                    $checkcart=true;
                                                }
                                            }
                                        }
                                        if($checkcart== true)
                                        {	
                                    
                                    foreach($_SESSION['cart'] as $cartitem){ ?>
                                    <li class="fw-normal"><?php echo $cartitem['name']." X ".$cartitem['quantity'] ?> <span><?php echo "$".$cartitem['quantity']*$cartitem['price'] ?></span></li>
                                    
                                    
                                    <?php 
                                        $total +=$cartitem['quantity']*$cartitem['price'];
                                        } 
                                    }
                                    ?>
                                    <input type="text" name = "total" value = "<?php echo $total?>" hidden ="true" >
                                    <li class="total-price">Total <span><?php echo "$".$total ?></span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>