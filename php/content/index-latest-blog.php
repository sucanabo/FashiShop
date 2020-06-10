
    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
			<?php
			foreach($latest1 as $a)
			{
				?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="<?php echo $level.img_path.$a['img'];?>" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <?php echo $a['ngaydang']?>
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    <?php echo $a['comment']?>
                                </div>
                            </div>
                            <a href="<?php echo $level.pages_path.'detail.php?id='.$a['latestid'];?>">
                                <h4><?php echo $a['tieude']?></h4>
                            </a>
                            <p><?php echo $a['gioithieu']?> </p>
                        </div>
                    </div>
                </div>
				<?php
			}
			?>
                
            </div>
            <div class="benefit-items">
                <div class="row">
				<?php
				foreach($latest2 as $a)
				{
					?>
					
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo $level.img_path.$a['img'];?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6><?php echo $a['tieude']?></h6>
                                <p><?php echo $a['gioithieu']?></p>
                            </div>
                        </div>
                    </div>
				<?php 
				}
				?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->