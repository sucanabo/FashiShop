<?php
if(isset($_POST['submit']))
{

	foreach($_POST as $productid=>$quantity)
	{
		if(($quantity == 0) and (is_numeric($quantity)))
		{
			unset ($_SESSION['cart'][$productid]);
		}
		else if(($quantity > 0) and (is_numeric($quantity)))
		{
			$_SESSION['cart'][$productid]['quantity']=$quantity;
		}
		
    }
    //var_dump($_POST);
	//header("location".$level.pages_path."shopping-cart.php");
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
<form action="<?php echo $level.pages_path.'shopping-cart.php'?>" method ="POST" >
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
                    foreach ($_SESSION['cart'] as $cartitem) {
                        ?>
                        <tr>
                            <td class="cart-pic first-row"><img src="<?php echo $level.img_path.$cartitem['img']?>" alt=""></td>
                            <td class="cart-title first-row">
                                <h5><?php echo $cartitem['name']?></h5>
                            </td>
                            <td class="p-price first-row"><?php echo '$'.$cartitem['price']?></td>
                            <td class="qua-col first-row">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name ="<?php echo $cartitem['productid']; ?>" size = '5' value="<?php echo $cartitem['quantity']?>">
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row"><?php echo '$'.$cartitem['price']*$cartitem['quantity']?></td>
                            <td class="close-td first-row"><a href="<?php echo $level.data_path."delcart.php?id=".$cartitem['productid']?>"><i class="ti-close"></i></a></td>
                        </tr>
                        
                        <?php
                        $total+=$cartitem['quantity']*$cartitem['price'];
                    }
                ?>
                
                
            </tbody>
        </table>
    </div>
    <div class="row">
    <div class="col-lg-4">
        <div class="cart-buttons">
            <a href="<?php echo $level.pages_path.'shop.php'?>" class="primary-btn continue-shop">Continue shopping</a>
            <input type = "submit" name ="submit" value = "Update cart" class="primary-btn up-cart"></input>
        </div>
        <div class="discount-coupon">
            <h6>Discount Codes</h6>
            <form action="<?php echo $level.pages_path.'check-out.php'?>" class="coupon-form">
                <input type="text" placeholder="Enter your codes">
                <button type="" class="site-btn coupon-btn">Apply</button>
            </form>
        </div>
    </div>
    <div class="col-lg-4 offset-lg-4">
        <div class="proceed-checkout">
            <ul>
                <!-- <li class="subtotal">Subtotal <span>$240.00</span></li> -->
                <li class="cart-total">Total <span><?php echo "$".$total ?></span></li>
            </ul>
            <a href="<?php echo $level.pages_path.'check-out.php'?>" class="proceed-btn">PROCEED TO CHECK OUT</a>
        </div>
    </div>
</div>
</div>
    
    <?php		
	}

else
	{
		echo "You have not purchased any products!!";
    }
    
?>
