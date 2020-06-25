<?php
session_start();
var_dump($_POST);

if(isset($_POST['submit']))
{

	foreach($_POST as $prid=>$soluong)
	{
		if( ($soluong == 0) and (is_numeric($soluong)))
		{
			unset ($_SESSION['cart'][$prid]);
		}
		elseif(($soluong > 0) and (is_numeric($soluong)))
		{
			$_SESSION['cart'][$prid]['soluong']=$soluong;
		}
		
	}
	//header("location:cart.php");
}
?>
<?php
$checkcart=false;
$total=0;
if(isset($_SESSION['cart']))
{
	foreach($_SESSION['cart'] as $k)
	{
		if(isset($k))
		{
			$checkcart=true;
		}
	}
}
if($checkcart== true)
{	
    ?>
<div class="col-lg-12">
<form action="<?php echo $level.data_path.'add_cart.php'?>">
    <div class="cart-table">
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th class="p-name">Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th><i class="ti-close"></i></th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    foreach ($cart as $key => $p) {
                        ?>
                        <tr>
                            <td class="cart-pic first-row"><img src="<?php echo $level.img_path.$p['img']?>" alt=""></td>
                            <td class="cart-title first-row">
                                <h5><?php echo $p['name']?></h5>
                            </td>
                            <td class="p-price first-row"><?php echo '$'.$p['pprice']?></td>
                            <td class="qua-col first-row">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row"><?php echo '$'.$p['tprice']?></td>
                            <td class="close-td first-row"><i class="ti-close"></i></td>
                        </tr>
                        <?php
                    }
                ?>
                
                
            </tbody>
        </table>
    </div>
    <?php		
	}

else
	{
		echo "Ban chua mua sp nao.";
	}
?>