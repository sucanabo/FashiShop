<!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                foreach($related as $rl)
                {
            ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                        <a href ="<?php echo $level.pages_path.'product.php?productid='.$rl['productid']; ?>">
                            <img src="<?php echo $level.img_path.$rl['img'];?>" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View </a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name"><?php echo $rl['ctname']?></div>
                            <a href="#">
                                <h5><?php echo $rl['prname']?></h5>
                            </a>
                            <div class="product-price">
                            <?php echo '$'.$rl['price']?>
                                <span><?php echo '$'.$rl['saleprice']?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
