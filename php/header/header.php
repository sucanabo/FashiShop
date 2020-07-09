<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="<?php if ($isLogin == true) echo $level.pages_path.'profile.php';else echo $level.pages_path.'login.php'; ?>" class="login-panel"><i class="fa fa-user"></i><?php if ($isLogin == true) echo $accIndex[0]["name"]; else echo "Login";?></a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="<?php echo $level.img_path.'flag-1.jpg'?>" data-imagecss="../flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="<?php echo $level.img_path.'flag-2.jpg'?>" data-imagecss="../flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                    <?php 
                        if($isLogin == true)
                            {
                                ?>
                            <div class= "logout"><a href="<?php echo $level.function_path.'logout.php'?>">, Logout</a></div>
                            <?php 
                            }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="<?php echo $level.'index.php'?>">
                            <a href="<?php echo $level.'index.php' ?>">
                                <img src="<?php echo $level.img_path?>logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="<?php echo $level.pages_path.'search.php'?>" method = "get" class="input-group">
                                <input name="search" type="text" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"placeholder="What do you need?">
                                <button type="submit" name="ok "value="search"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <!-- <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li> -->
                            <li class="cart-icon"><a href="<?php echo $level.pages_path.'shopping-cart.php' ?>">
                                    <i class="icon_bag_alt"></i>
                                    <span><?php
                                        $check = false;
                                        if(empty($_SESSION)==false){
                                        foreach($_SESSION['cart'] as $k)
                                        {
                                            if(isset($k))
                                            {
                                                $check=true;
                                            }
                                        }
                                        if($check==false){
                                            echo '0';
                                        }
                                        else{
                                            $items = $_SESSION['cart'];
                                            echo count($items);
                                        }
                                    }
                                    else echo '0'
                                    ?></span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <?php
                                               
                                                $total = 0;
                                                if(empty($_SESSION)==false){
                                                    foreach ($_SESSION['cart'] as $cartitem) {
                                                    ?>
                                                    <tr>
                                                        <td class="si-pic"><img src="<?php $level.img_path.$cartitem['img']?>" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p><?php echo '$'.$cartitem['price'].' X '.$cartitem['quantity']?></p>
                                                                <h6><?php echo $cartitem['name'] ?></h6>
                                                            </div>
                                                        </td> 
                                                        <td class="si-close"><a href="<?php echo $level.data_path."delcart.php?id=".$cartitem['productid']?>">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            $total+=$cartitem['quantity']*$cartitem['price'];
                                                    }
                                                ?>
                                                <?php
                                            }
                                            
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5><?php echo '$'.$total ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="<?php echo $level.pages_path.'shopping-cart.php' ?>" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="<?php echo $level.pages_path.'check-out.php' ?>" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="<?php echo $level.'index.php'?>">Home</a></li>
                        <li><a href="<?php echo $level.pages_path.'shop.php'?>">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $level.pages_path.'blog.php'?>">Blog</a></li>
                        <li><a href="<?php echo $level.pages_path.'contact.php'?>">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="<?php echo $level.pages_path.'blog-details.php'?>">Blog Details</a></li>
                                <li><a href="<?php echo $level.pages_path.'shopping-cart.php'?>">Shopping Cart</a></li>
                                <li><a href="<?php echo $level.pages_path.'check-out.php'?>">Checkout</a></li>
                                <li><a href="<?php echo $level.pages_path.'faq.php'?>">Faq</a></li>
                                <li><a href="<?php echo $level.pages_path.'register.php'?>">Register</a></li>
                                <li><a href="<?php echo $level.pages_path.'login.php'?>">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>