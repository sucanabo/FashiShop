<?php
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');
$author =$_GET['author'];
$cmt =$_GET['cmt'];
$email =$_GET['email'];
$productid = $_GET['productid'];
$result = DP::run_query( "Insert into comment (productid,email,author,cmt,status) value(?,?,?,?,?)",[$productid,$email,$author,$cmt,0],3 );
header('location:'.$level.pages_path.'product.php?productid='.$productid);
 ?>