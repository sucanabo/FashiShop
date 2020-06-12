<?php
$productid = $_GET['productid'];
$women = DP::run_query("SELECT * FROM `product` WHERE productid=? limit 13,4",[$productid],2);
$men = DP::run_query("SELECT * FROM `product` WHERE productid=? limit 9,4",[$productid],2);
$product = DP::run_query("SELECT * FROM `product` WHERE productid=?",[$productid],2);
$comment = DP::run_query("SELECT * FROM `comment` WHERE productid=?",[$productid],2);
?> 