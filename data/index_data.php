<?php
$banner = DP::run_query("SELECT * FROM banner",[],2);
$deal = DP::run_query("SELECT * FROM deal",[],2);
$women = DP::run_query("SELECT * FROM `product` WHERE gender=?",['women'],2);
$men = DP::run_query("SELECT * FROM `product` WHERE gender=? ",['men'],2);
$intargram = DP::run_query("SELECT * FROM intargram",[],2);
$latest1 = DP::run_query("SELECT * FROM latest1",[],2);
$latest2 = DP::run_query("SELECT * FROM latest2",[],2);

?>