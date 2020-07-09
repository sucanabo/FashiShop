
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
                                    <?php echo $a['date']?>
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    <?php echo $a['comment']?>
                                </div>
                            </div>
                            <a href="#">
                                <h4><?php echo $a['title']?></h4>
                            </a>
                            <p><?php echo $a['text']?> </p>
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
                                <h6><?php echo $a['title']?></h6>
                                <p><?php echo $a['text']?></p>
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