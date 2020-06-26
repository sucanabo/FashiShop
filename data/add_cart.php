<?php 
    include("../config.php");
    $level = lv1;
    include($level."DB.php");
    session_start();
    $id = $_GET['id'];
    $product=DP::run_query("select * from product where productid = ?",[$id],2);
    if($product[0]['instock']>0)
    {
    
        $name = $product[0]['name'];
        $price = $product[0]['price'];
        $img = $product[0]['img'];
        if(isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]['quantity'] += 1;
        }
        else
        {
            $_SESSION['cart'][$id]
            =array("productid"=>$id,"name"=>$name,"price"=>$price,"img"=>$img,"quantity"=>1); 
        }
        header("location:".$level.pages_path."shopping-cart.php");
    }
    else
    {
        header("location:".$level.pages_path."shop.php");
    }
?>