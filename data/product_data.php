<?php
$pane = DP::run_query("SELECT * FROM pane",[],2);
$related = DP::run_query("SELECT * FROM product limit 0,4",[],2);
?>