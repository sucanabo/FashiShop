<section class="blog-details spad">
        <?php foreach($blogdetail_data as $bld){ ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2 name="id"><?php  echo $bld['text']  ?></h2>
                            <p><?php  echo $bld['type']  ?> <span><?php  echo $bld['date']  ?></span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="<?php echo $level.img_path.blog.$bld['img'] ?>" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p><?php  echo $bld['des']  ?>
                            </p>
                        </div>
                        <div class="blog-quote">
                            <p><?php  echo $bld['quote']  ?></span></p>
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
                        <p><?php  echo $bld['des']  ?></p>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Travel</li>
                                    <li>Beauty</li>
                                    <li>Fashion</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="#" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="../img/blog/prev-blog.png" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>The Personality Trait That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 offset-lg-2 col-md-6">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="../img/blog/next-blog.png" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post:</span>
                                            <h5>The Personality Trait That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="../img/blog/post-by.png" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5>Shane Lynch</h5>
                                </a>
                                <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    amodo</p>
                            </div>
                        </div>
                        
                                    <div class="customer-review-option">
                                        <h4> Comments</h4>
                                        <div class="comment-option">
										<?php 
										foreach($comment as $a)
										{
											?>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="<?php echo $level.img_path;?>product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><?php echo $a['author']?> <span><?php
                                                    $today = getdate();
                                                    $date = $today['mday']."/".$today['mon']."/".$today['year'];
                                                    echo $date;
                                                    ?></span></h5>
                                                    <div class="at-reply"><?php echo $a['cmt'];?></div>
                                                </div>
                                            </div>
                                            
										<?php
										}
										?>
                                        </div>
                                    </div>
                        
                                   
                                    
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="<?php echo $level.data_path.'addcommentblog.php'?>" method="get" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="author" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="cmt" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                    <input type="textarea" name="blogid" hidden ="true" value="<?php echo $blogdetail_data[0]['blogid'];?>">
                                        <input type="textarea" name="cmt" placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php } ?>
    </section>