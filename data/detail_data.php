<?php
$productid = $_GET['productid'];
$women = DP::run_query("SELECT * FROM `product` WHERE productid=? limit 13,4",[$productid],2);
$men = DP::run_query("SELECT * FROM `product` WHERE productid=? limit 9,4",[$productid],2);
$comment = DP::run_query("SELECT * FROM `comment` WHERE productid=?",[$productid],2);
$product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id and productid=?",[$productid],2);
$related = DP::run_query("SELECT*,catagory.name as ctname, product.name as prname FROM product,catagory WHERE product.catagory=catagory.id and catagory.name in ( SELECT catagory.name from product,catagory where product.catagory=catagory.id and productid=?)",[$productid],2);
?> 