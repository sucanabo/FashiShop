<?php 
    $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id limit 0,9",[],2);
?>  
