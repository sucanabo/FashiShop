<div class="col-lg-12">
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
                var_dump($cart);
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
                                        <input type="text" value="1" name ="quantity" >
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