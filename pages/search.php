<?php
    include ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    if(isset($_REQUEST['ok']) || !empty($_GET['search'])){
        $keyWord = $_GET['search'];
        $product = DP::run_query("SELECT * from product WHERE name like '%$keyWord%' OR catagory like '%$keyWord%' OR price like '%$keyWord%'",[],2);
    }
    else
    {
        $product = DP::run_query("SELECT * FROM product",[],2);
    } 
    $search = true;
    $blogdetail_page =false;
    $blog_page = false;
    $checkout_page = false;
    $contact_page = false;
    $faq_page = false;
	$index_page = false;
	$login_page = false;
	$main_page = false;
    $product_page = false;
    $register_page = false;
    $shop_page =  false;
    $shoppingcart_page = false;
    include_once ($level.'layout.php');
    
?>