<?php
    $cart = DP::run_query ("SELECT * FROM `cart` where userid =?",[$userid],2);

?>