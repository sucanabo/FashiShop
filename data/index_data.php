<?php
$banner = DP::run_query("SELECT * FROM banner",[],2);
$deal = DP::run_query("SELECT * FROM deal",[],2);
$manbanner = DP::run_query("SELECT * FROM manbanner",[],2);
$womenbanner = DP::run_query("SELECT * FROM womenbanner",[],2);
$intargram = DP::run_query("SELECT * FROM intargram",[],2);
$latest1 = DP::run_query("SELECT * FROM latest1",[],2);
$latest2 = DP::run_query("SELECT * FROM latest2",[],2);

?>