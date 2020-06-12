<?php
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');
$tacgia =$_GET['tacgia'];
$noidung =$_GET['noidung'];
$email =$_GET['email'];
$productid = $_GET['productid'];
$result = DP::run_query( "Insert into comment (productid,email,tacgia,noidung) value(?,?,?,?)",[$productid,$email,$tacgia,$noidung],3 );
header('location:'.$level.pages_path.'product.php?productid='.$productid);
 ?>