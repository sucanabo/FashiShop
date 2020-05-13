<!DOCTYPE html>
<html lang="en">
<?php 
    //data         
    include_once ($level.data_path.'data.php');
    include ($level.php_path.head_path.'head.php')
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
    <section class="spad">
        <div class="container">
            <div class="row">
                <?php
                    //Product Shop
                    if($shop_page == true)
                    {
                        include_once ($level.data_path.'shop_data.php');
                        include ($level.php_path.content_path.'produts-sidebar.php');
                        include ($level.php_path.content_path.'product-container.php');
                    } 
                    if($shoppingcart_page == true)
                    {
                        include_once ($level.data_path.'shoppingcart_data.php');
                        include ($level.php_path.content_path.'cart-table.php');
                        include ($level.php_path.content_path.'cart-pay.php');
                    }
                    if($blogdetail_page == true){
                        include_once ($level.php_path.content_path.'blog-detail-title.php');
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