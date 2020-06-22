<?php
    include_once ($level.'DB.php');
    $blogid = $_GET['blogid'];
    $blogdetail_data = DP::run_query("SELECT * FROM blog WHERE blogid = ?",[$blogid],2);
    $comment = DP::run_query("SELECT * FROM `comment` WHERE blogid=?",[$blogid],2);
?>