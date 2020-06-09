
    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
	<?php
	foreach($intargram as $a)
	{
		?>
        <div class="insta-item set-bg" data-setbg="<?php echo $level.img_path.$a['img'];?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"><?php echo $a['tieude']?></a></h5>
            </div>
        </div>
       
	<?php
	}
	?>
    </div>
    <!-- Instagram Section End -->