<?php
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');
$tacgia =$_GET['tacgia'];
$noidung =$_GET['noidung'];
$email =$_GET['email'];
$blogid = $_GET['blogid'];
$result = DP::run_query( "Insert into comment (blogid,email,tacgia,noidung) value(?,?,?,?)",[$blogid,$email,$tacgia,$noidung],3 );
header('location:'.$level.pages_path.'blog-details.php?blogid='.$blogid);
?>