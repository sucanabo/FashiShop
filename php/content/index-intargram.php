
    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
	<?php
	foreach($insta as $a)
	{
		?>
        <div class="insta-item set-bg" data-setbg="<?php echo $level.img_path.$a['img'];?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"><?php echo $a['title']?></a></h5>
            </div>
        </div>
       
	<?php
	}
	?>
    </div>
    <!-- Instagram Section End -->