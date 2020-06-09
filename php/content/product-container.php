
<div class="<?php if($lg12 == true ){echo 'col-lg-12';} else echo 'col-lg-9';?> order-1 order-lg-2">
                    <?php include_once($level.php_path.content_path.'product-show-option.php'); ?>
                    <div class="product-list">
                        <div class="row">
                            <?php 
                                foreach($product as $pd){
                                    ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="pi-pic">
                                                <img src="<?php echo $level.img_path.$pd['img']; ?>" alt="">
                                                <?php 
                                                    if($pd['sale-box'] == true)
                                                        include ($level.php_path.content_path.'sale-box.php');
                                                ?>
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                                <ul>
                                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name"><?php echo $pd['catagory'];?></div>
                                                <a href="#">
                                                    <h5><?php echo $pd['name'];?></h5>
                                                </a>
                                                <div class="product-price">
                                                <?php echo $pd['price'];?>
                                                    <span><?php echo $pd['sale-price'];?></span>
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
				