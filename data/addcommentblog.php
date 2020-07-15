<?php
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');
$author =$_GET['author'];
$cmt =$_GET['cmt'];
$email =$_GET['email'];
$blogid = $_GET['blogid'];
$result = DP::run_query( "Insert into comment (blogid,email,author,cmt) value(?,?,?,?)",[$blogid,$email,$author,$cmt],3 );
header('location:'.$level.pages_path.'blog-details.php?blogid='.$blogid);
?>