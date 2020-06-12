<?php
$banner = DP::run_query("SELECT * FROM banner",[],2);
$deal = DP::run_query("SELECT * FROM deal",[],2);
$women = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id AND gender = ?",['women'],2);
$men = DP::run_query(" SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id AND gender = ? ",['men'],2);
$insta = DP::run_query("SELECT * FROM insta",[],2);
$latest1 = DP::run_query("SELECT * FROM latest where phan=?",[1],2);
$latest2 = DP::run_query("SELECT * FROM latest where phan=?",[2],2);

?>