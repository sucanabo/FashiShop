<?php 
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $blog_data = DP::run_query("SELECT * FROM blog",[],2);
    $search = false;
    $blogdetail_page =false;
    $blog_page = true;
    $checkout_page = false;
    $contact_page = false;
    $faq_page = false;
    $login_page = false;
    $index_page = false;
    $product_page = false;
    $register_page = false;
    $shop_page =  false;
    $main_page = false;
    $shoppingcart_page = false;
    include_once ($level.'layout.php');
?>
