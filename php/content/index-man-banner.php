
    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        
						<?php
					
						foreach ($men as $a)
						{
							?>
                        <div class="product-item">
                            <div class="pi-pic">
							<a href ="<?php echo $level.pages_path.'product.php?productid='.$a['productid']?>">
                                <img src="<?php echo $level.img_path.$a['img'];?>" alt="">
								</a>
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
                                <div class="catagory-name"><?php echo $a['ctname']?></div>
                                <a href="#">
                                    <h5><?php echo $a['prname']?></h5>
                                </a>
                                <div class="product-price">
                                    <?php echo '$'.$a['price']?>
										<span><?php echo '$'.$a['saleprice']?></span>
                                </div>
                            </div>
                        </div>
						<?php
						}
						?>
                        
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="<?php echo $level.img_path;?>products/man-large.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Man Banner Section End -->