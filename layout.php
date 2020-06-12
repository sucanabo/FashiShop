<!DOCTYPE html>
<html lang="en">
<?php 
//thu loi
    //data         
    include_once ($level.data_path.'data.php');
    include_once ($level.'DB.php');
    include ($level.php_path.head_path.'head.php');
?>
<body>
    <?php 
        //<!-- Page Preloder -->
        include ($level.php_path.content_path.'preloder.php');
        //Header Section
        include ($level.php_path.header_path.'header.php');
        //Breadcrumb Section
        include ($level.php_path.content_path.'breadcrumb-section.php');
    ?>
					<?php
                    //index
                    if ($index_page == true){
						
						include_once ($level.data_path.'index_data.php');
						include ($level.php_path.content_path.'index-section.php');
						include ($level.php_path.content_path.'index-banner.php');
						include ($level.php_path.content_path.'index-women-banner.php');
						include ($level.php_path.content_path.'index-deal.php');
						include ($level.php_path.content_path.'index-man-banner.php');
						include ($level.php_path.content_path.'index-intargram.php');
						include ($level.php_path.content_path.'index-latest-blog.php');
                    }
                    //login
					if ($login_page == true){
						include ($level.php_path.content_path.'login-register.php');
                    }
                   
                    //register
					if ($register_page == true){
						include ($level.php_path.content_path.'register-register.php');
					}
					?>
    ?>
	<section class="spad">
        <div class="container">
            <div class="row">
			<?php
                //main
                if ($main_page == true){
                    include ($level.php_path.content_path.'main.php');
                }
                //procduct ( product-detail )
                if  ($product_page == true){
                    
                    include ($level.php_path.content_path.'product-section.php');
                    include ($level.php_path.content_path.'product-section2.php');
                    include ($level.php_path.content_path.'product-related.php');
                }             
                //shop
                if($shop_page == true)
                {
                    include_once ($level.data_path.'shop_data.php');
                    include ($level.php_path.content_path.'produts-sidebar.php');
                    include ($level.php_path.content_path.'product-container.php');
                } 
                //cart
                if($shoppingcart_page == true)
                {
                    include_once ($level.data_path.'shoppingcart_data.php');
                    include ($level.php_path.content_path.'cart-table.php');
                    include ($level.php_path.content_path.'cart-pay.php');
                }
                //blog-detail
                if($blogdetail_page == true)
                {
                    include_once ($level.data_path.'blogdetail_data.php');
                    include_once ($level.php_path.content_path.'blog-details spad.php');
                }
                //blog
                if($blog_page == true)
                {
                    include_once ($level.data_path.'blog_data.php');
                    include_once ($level.php_path.content_path.'blog-sidebar.php');
                    include_once ($level.php_path.content_path.'blog-right.php');
                }
                //checkout
                if($checkout_page == true)
                {
                    include_once ($level.data_path.'checkout_data.php');
                    include_once ($level.php_path.content_path.'checkout-form.php');
                }
                //contact
                if($contact_page == true)
                {
                    include_once ($level.php_path.content_path.'contact-map-spad.php');
                    include_once ($level.php_path.content_path.'contact-section-spad.php');
                }
                //faq
                if($faq_page == true)
                {
                    include_once ($level.php_path.content_path.'faq_content.php');
                }
                //search
                if($search == true)
                {
                    $lg12 = true;
                    include ($level.php_path.content_path.'product-container.php');
                }
                ?> 
            </div>
        </div>
    </section>
    <?php 
        // Partner Logo Section
        include_once ($level.php_path.content_path.'partner-logo.php');
        include_once ($level.php_path.footer_path.'footer.php');
        
    ?>                
    <?php include ($level.php_path.script_path.'script.php');?>
	
</body>
</html>