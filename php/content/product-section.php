 <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                   <?php   
        //catagories
        include_once ($level.php_path.content_path.'sidebar-catagories.php');
        //brand
        include_once ($level.php_path.content_path.'sidebar-brand.php');
        //price
        include_once ($level.php_path.content_path.'sidebar-price.php');
        //filter
        include_once ($level.php_path.content_path.'sidebar-filter.php');
        //size
        include_once ($level.php_path.content_path.'sidebar-size.php');
        //tags
        include_once ($level.php_path.content_path.'sidebar-tags.php');
    ?>
                    
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="<?php echo $level.img_path;?>product-single/product-1.jpg" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="<?php echo $level.img_path;?>product-single/product-1.jpg"><img
                                            src="<?php echo $level.img_path;?>product-single/product-1.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="<?php echo $level.img_path;?>product-single/product-2.jpg"><img
                                            src="<?php echo $level.img_path;?>product-single/product-2.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="<?php echo $level.img_path;?>product-single/product-3.jpg"><img
                                            src="<?php echo $level.img_path;?>product-single/product-3.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="<?php echo $level.img_path;?>product-single/product-3.jpg"><img
                                            src="<?php echo $level.img_path;?>product-single/product-3.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>oranges</span>
                                    <h3>Pure Pineapple</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                                        sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                                    <h4>$495.00 <span>629.99</span></h4>
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: More Accessories, Wallets & Cases</li>
                                    <li><span>TAGS</span>: Clothing, T-shirt, Woman</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : 00012</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
         
    <!-- Product Shop Section End -->