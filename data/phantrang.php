<?php
	$page=0;//khởi tạo trang ban đầu
	$limit=3;//số bản ghi trên 1 trang (2 bản ghi trên 1 trang)
	$total_record = sizeof($product);//tính tổng số bản ghi select được
	$total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia
	if(isset($_GET['page']))
	{
		include_once('../config.php');
		$level=lv1;
		include_once('../DB.php');
		$start=($_GET['page']-1)*$_GET['limit'];
		$num=2;
	}
	else 
	{
		
		$start=0;
		$num=(int)$limit;
	}
	$product=DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id  limit ?,?",[$start,$num],2);

	header('location:'.$level.pages_path.'shop.php');
	//header('location:'.$level.pages_path.'shop.php?page='.$start['page'].'shop.php?limit='.$start['limit']);
	
?>