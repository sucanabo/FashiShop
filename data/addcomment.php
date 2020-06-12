<?php
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');
$tgia =$_GET['tgia'];
$ndung =$_GET['ndung'];
$email =$_GET['email'];
$productid = $_GET['productid'];
$result = DP::run_query( "Insert into comment (productid,email,tgia,ndung) value(?,?,?,?)",[$productid,$email,$tgia,$ndung],3 );
header('location:'.$level.pages_path.'product.php?productid='.$productid);
 ?>