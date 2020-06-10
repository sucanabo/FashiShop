<div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
					
<section class="blog-details spad">
        <div class="container">
            <div class="row">
			
                <div class="col-lg-12">
                    <div class="blog-details-inner">
					
					<?php
					foreach($latest1 as $a)
					{
						?>
                        <div class="blog-detail-title">
						
                            <h2><?php echo $a['tieude'];?></h2>
                            <p>travel <span><?php echo $a['ngaydang'];?></span></p>
                        </div>
					
                        <div class="blog-large-pic">
                            <img src="<?php echo $level.img_path.$a['img'];?>" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                            </p>
                        </div>
                        <div class="blog-quote">
                            <p>“ Technology is nothing. What's important is that you have a faith in people, that
                                they're basically good and smart, and if you give them tools, they'll do wonderful
                                things with them.” <span>- Steven Jobs</span></p>
                        </div>
                        <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="../img/blog/blog-detail-1.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="../img/blog/blog-detail-2.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="../img/blog/blog-detail-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <p><?php echo $a['gioithieu'];?></p>
						        

						
							<?php
					}
					?>
					
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
	</div>
	</div>
	