<?php 
    include_once ($level.'DB.php');
    if(isset($_REQUEST['ok']) || !empty($_GET['search'])){
        $keyWord = $_GET['search'];
        $product = DP::run_query("SELECT * from product WHERE name like '%$keyWord%' OR catagory like '%$keyWord%' OR price like '%$keyWord%'",[],2);
    }
    else
    {
        $product = DP::run_query("SELECT * FROM product",[],2);
    } 
?>