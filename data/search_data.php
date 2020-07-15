<?php 
    include_once ($level.'DB.php');
    if(isset($_REQUEST['ok']) || !empty($_GET['search'])){
        $keyWord = $_GET['search'];
        $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id limit 0,9",[],2);
    }
    else
    {
        $product = DP::run_query("SELECT * FROM product",[],2);
    } 
?>