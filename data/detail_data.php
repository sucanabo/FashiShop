<?php
$manbannerid = $_GET['idman'];
$manbanner = DP::run_query("SELECT * FROM `manbanner` WHERE manbannerid=?",[$manbannerid],2);
$womenbannerid = $_GET['idwomen'];
$womenbanner = DP::run_query("SELECT * FROM `womenbanner` WHERE womenbannerid=?",[$womenbannerid],2);
$productid = $_GET['idproduct'];
$product = DP::run_query("SELECT * FROM `product` WHERE productid=?",[$productid],2);

?>