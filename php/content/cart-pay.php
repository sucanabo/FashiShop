<div class="row">
    <div class="col-lg-4">
        <div class="cart-buttons">
            <a href="<?php echo $level.pages_path.'shop.php'?>" class="primary-btn continue-shop">Continue shopping</a>
            <a href="#" class="primary-btn up-cart">Update cart</a>
        </div>
        <div class="discount-coupon">
            <h6>Discount Codes</h6>
            <form action="<?php echo $level.pages_path.'check-out.php'?>" class="coupon-form">
                <input type="text" placeholder="Enter your codes">
                <button type="submit" class="site-btn coupon-btn">Apply</button>
            </form>
        </div>
    </div>
    <div class="col-lg-4 offset-lg-4">
        <div class="proceed-checkout">
            <ul>
                <li class="subtotal">Subtotal <span>$240.00</span></li>
                <li class="cart-total">Total <span>$240.00</span></li>
            </ul>
            <a href="<?php echo $level.pages_path.'chec-out.php'?>" class="proceed-btn">PROCEED TO CHECK OUT</a>
        </div>
    </div>
</div>
</div>