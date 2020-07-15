<?php
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $idcmt = $_GET['id'];
    $idpr = $_GET['prid'];
    $result = DP::run_query("update comment set status = ? where id = ?",[1,$idcmt],3);
    header('location:'.$level.pages_path.'product.php?productid='.$idpr);
    ?>
?>