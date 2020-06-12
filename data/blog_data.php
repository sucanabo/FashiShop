<?php
    include_once ($level.'DB.php');
    $blog_data = DP::run_query("SELECT * FROM blog",[],2);
?>