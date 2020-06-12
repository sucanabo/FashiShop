<div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <?php
                        foreach ($blog_data as $bl) {
                            
                        ?>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="<?php echo $level.img_path.blog.$bl['img']?>" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="<?php echo $level.pages_path.'blog-details.php'.'?id='.$bl['blogid'] ?>">
                                        <h4><?php echo $bl['text'] ?></h4>
                                    </a>
                                    <p><?php echo $bl['type'] ?> <span><?php echo $bl['date'] ?></span></p>
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