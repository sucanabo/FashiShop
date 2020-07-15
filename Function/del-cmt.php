<?php
    include_once ("../config.php");
    $level = lv1;
    include_once ($level.'DB.php');
    $id = $_GET['id'];
    $proid = $_GET['productid'];
    $result = DP::run_query("delete from comment where id = ?",[$id],3);
    header('location:'.$level.pages_path.'product.php?productid='.$proid)
?>