<?php
    $cart = DP::run_query ("SELECT * FROM `cart`",[],2);
    var_dump($cart);
?>