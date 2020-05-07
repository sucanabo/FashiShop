<!DOCTYPE html>
<html lang="zxx">
<?php include_once ($level.php_path.head_path.'head.php') ?>

<body>
    <?php 
        //<!-- Page Preloder -->
        include ($level.php_path.content_path.'preloder.php');
        //Header Section
        include ($level.php_path.header_path.'header.php');
        //Breadcrumb Section
        include ($level.php_path.content_path.'breadcrumb-section.php');
        //Product Shop
    ?>

    <!-- Product Shop Section Begin -->
    <?php
        if($shop_page == true)
        {?>
        <section class="spad">
            <div class="container">
                <div class="row">
                    <?php 
                        include ($level.php_path.content_path.'produts-sidebar.php');
                        include ($level.php_path.content_path.'product-container.php');
                    ?> 
                </div>
         </div>
        </section>
        <?php}
        
    ?>
    <!-- Partner Logo-->
    <?php include_once ($level.php_path.content_path.'partner-logo.php');?>
    <!-- Footer Section -->
    <?php include_once ($level.php_path.footer_path.'footer.php');?>
    <!-- Js Plugins -->
    <?php include_once ($level.php_path.script_path.'script.php'); ?>
</body>
</html>