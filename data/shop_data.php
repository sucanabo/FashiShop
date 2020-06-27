<?php 
include_once ('../config.php');
$level = lv1 ;
include_once('../DB.php');

    $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id ",[  ],2);
?>  
