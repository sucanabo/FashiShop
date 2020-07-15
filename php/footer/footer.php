<footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src=<?php echo $level.img_path.'footer-logo.png'?> alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: sucanabo@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="<?php echo $level.pages_path.'blog.php' ?>">About Us</a></li>
                            <li><a href="<?php echo $level.pages_path.'check-out.php' ?>">Checkout</a></li>
                            <li><a href="<?php echo $level.pages_path.'contact.php' ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="<?php echo $level.pages_path.'contact.php' ?>">Contact</a></li>
                            <li><a href="<?php echo $level.pages_path.'shopping-cart.php' ?>">Shopping Cart</a></li>
                            <li><a href="<?php echo $level.pages_path.'shop.php' ?>">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="<?php echo $level.'index.php' ?>" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="summit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                        
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                        <div class="copyright-text">
                            <img src=<?php echo $level.img_path.'payment-method.png'?> alt="">
                          
                            <?php

                                $file = $level."access_number.txt";
                                $open = fopen ($file, "r");
                                $view = fread ($open, filesize ($file));
                                fclose ($open);
                                $view++; 

                                $open = fopen($file,"w");
                                fwrite($open,$view);
                                fclose($open);
                                echo " Số Lượng Truy Cập Trang Wed: ".$view;
                            ?>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>