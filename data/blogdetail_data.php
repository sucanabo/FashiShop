<?php
    include_once ($level.'DB.php');
    $blogdetail_id = $_GET['id'];
    $blogdetail_data = DP::run_query("SELECT * FROM blog WHERE blogid = ?",[$blogdetail_id],2);
?>