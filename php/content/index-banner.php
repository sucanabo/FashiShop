
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
                        
                        <?php if($a['bannerid']=="1") {?>
                            <a href="<?php echo $level.pages_path.'shop.php?namegender=men'?>">
                        <?php }  else if ($a['bannerid']=="2"){?>
                            <a href="<?php echo $level.pages_path.'shop.php?namegender=women'?>">
                        <?php } else ?>
                        <a href="<?php echo $level.pages_path.'shop.php?namegender=kid'?>">
                        
                            <h4><?php echo $a['text'];?></h4>
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