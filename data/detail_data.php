<?php
$latestid = $_GET['id'];
$latest1 = DP::run_query("SELECT * FROM `latest1` WHERE latestid=?",[$latestid],2);
?>