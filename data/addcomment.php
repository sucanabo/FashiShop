<?php
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');
$name =$_GET['name'];
$comment =$_GET['comment'];
$email =$_GET['email'];
$productid = $_GET['idproduct'];
$result = DP::run_query( "Insert into binhluan (productid,email,name,comment) value(?,?,?,?)",[$productid,$email,$name,$comment],3 );
header('location:'.$level.pages_path.'product.php?idproduct='.$productid);
 ?>