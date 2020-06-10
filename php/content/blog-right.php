<div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <?php
                        foreach ($blog_data as $blog_data) {
                            
                        ?>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="<?php echo $level.img_path.blog.$blog_data['img']?>" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="<?php echo $level.pages_path.'blog-details.php'.'?id='.$blog_data['blogid'] ?>">
                                        <h4><?php echo $blog_data['text'] ?></h4>
                                    </a>
                                    <p><?php echo $blog_data['type'] ?> <span><?php echo $blog_data['time'] ?></span></p>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                        }   ?>
                        
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">
                                    Loading More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>