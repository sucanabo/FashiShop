<?php 
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $blogdetail_id = $_GET['id'];
    $blogdetail_data = DP::run_query("SELECT * FROM blogdetail WHERE blogdetailid = ?",[$blogdetail_id],2);
    $search = false;
    $blogdetail_page = true;
    $blog_page = false;
    $checkout_page = false;
    $contact_page = false;
    $faq_page = false;
    $product_page = false;
    $register_page = false;
    $shop_page =  false;
    $shoppingcart_page = false;
	$index_page = false;
	$main_page = false;
	$login_page = false;
    include_once ($level.'layout.php');
?>
