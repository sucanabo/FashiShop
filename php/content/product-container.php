<div class="<?php if($lg12 == true ){echo 'col-lg-12';} else echo 'col-lg-9';?> order-1 order-lg-2">
                    <?php include_once($level.php_path.content_path.'product-show-option.php'); ?>
                    <div class="product-list">
                    <?php
                    $checkcart=false;
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
                    if ($checkcart ==false)
                    {
                        echo '<p>You don\'t have any item in cart</p>';
                    } else {
                        $items = $_SESSION['cart'];
                        echo '<p>You have <a href="cart.php">'.count($items).' item in cart</a></p>';
                    }
                ?>
                        <div class="row">
                            <?php 
                            //tetst
                                foreach($product as $pd){
                                    ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="pi-pic">
											<a href ="<?php echo $level.pages_path.'product.php?productid='.$pd['productid']; ?>">
                                                <img src="<?php echo $level.img_path.$pd['img']; ?>" alt="">
												</a>
                                                <?php 
                                                    if($pd['salebox'] != 'FALSE')
                                                        include ($level.php_path.content_path.'sale-box.php');
                                                ?>
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                                <ul>
                                                    <li class="w-icon active"><a href="<?php echo $level.data_path."add_cart.php?id=".$pd['productid'] ?>"><i class="icon_bag_alt"></i></a></li>
                                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name"><?php echo $pd['ctname'];?></div>
                                                <a href="#">
                                                    <h5><?php echo $pd['prname'];?></h5>
                                                </a>
                                                <div class="product-price">
                                                <?php echo '$'.$pd['price'];?>
                                                    <span><?php echo '$'.$pd['saleprice'];?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div>
                </div>
