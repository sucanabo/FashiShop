<?php
session_start();
include("../config.php");
$level = lv1;
$cart=$_SESSION['cart'];
var_dump($cart);
$id=$_GET['id'];
    if($id == 0)
    {
        unset($_SESSION['cart']);
    }
    else
    {
    unset($_SESSION['cart'][$id]);
    }
header("location:".$level.pages_path."shopping-cart.php");
exit();
?>