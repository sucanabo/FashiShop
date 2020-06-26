<?php
    include_once ('../config.php');
    include_once ($level.'DB.php');
    $chkdata = DP::run_query("select * from cart where userid = ?",[$userid],2);
?>