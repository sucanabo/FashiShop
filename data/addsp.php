<?php
    include_once ('../config.php');
    $level = lv1 ;
    include_once ('../DB.php');
    $productid = $_GET['id'];
    $sp = DP::run_query("select * from product where productid = ? ",[$productid],2);
    $result = DP::run_query("insert into cart(img,name,pprice,tprice,userid) values(?,?,?,?,?)",[$sp[0]['img'],$sp[0]['name'],$sp[0]['price'],$sp[0]['saleprice'],$userid],3);
    header("location:".$level.pages_path.'shop.php');

?>