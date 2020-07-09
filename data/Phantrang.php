
<?php
	
	
	if(isset($_GET['page']))
	{
		include_once('../config.php');
		$level=lv1;
		include_once($level.'DB.php');
		$start=($_GET['page']-1)*$_GET['limit'];
		$num=6;
	}
	else 
	{
		
		$start=0;
		$num=(int)$limit;
	}
	$product2=DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id limit ?,?",[$start,$num],2);
	//var_dump($product2);
    //header('location:'.$level.'index.php');
    include($level.pages_path.'shop.php');
?>
