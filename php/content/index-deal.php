
    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="<?php echo $level.img_path;?>time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                        consectetur adipisicing elit </p>
                    <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
				<?php
				foreach ($deal as $b){
				?>
                    <div class="cd-item">
                        <span><?php echo $b['so']?></span>
                        <p><?php echo $b['ten']?></p>
                    </div>
					<?php
				}
				?>
                   
                </div>
                <a href="<?php echo $level.pages_path.'shop.php'?>" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->