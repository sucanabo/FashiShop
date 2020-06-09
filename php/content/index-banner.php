
    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
			<?php
			foreach($banner as $a)
			{
				?>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?php echo  $level.img_path.$a['img']?>" alt="">
                        <div class="inner-text">
                            <h4><?php echo $a['tieude'];?></h4>
                        </div>
                    </div>
                </div>
				<?php
			}
			?>
                
            </div>
        </div>
    </div>
    <!-- Banner Section End -->