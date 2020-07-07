
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $level.pages_path.'index.php'?>"><i class="fa fa-home"></i> Home</a>
                    <?php 
                        if($shoppingcart_page == true || $product_page == true || $checkout_page == true)
                            echo '<a href="'.$level.pages_path.'shop.php'.'"'.'>Shop</a>';
                        if($blogdetail_page == true)
                        echo '<a href="'.$level.pages_path.'shop.php'.'"'.'>Blog</a>';
                    ?>
                    <span><?php
                        if($shop_page == true)
                            echo 'Shop'; 
                        if($product_page == true)
                            echo 'Detail'; 
                        if($shoppingcart_page == true)
                            echo 'Shopping cart';
                        if($checkout_page == true)
                            echo 'Check out'; 
                        if($faq_page == true)
                            echo 'FAQ';
                        if($blog_page == true)
                            echo 'Blog';
                        if($blogdetail_page == true)
                        echo 'Blog detail';
                        if($contact_page == true)
                            echo 'Contact';
                        if($register_page == true)
                            echo 'Register';
                        if($profile_page==true)
                            echo 'Profile';
                ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
