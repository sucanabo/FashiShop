 <div class="tab-pane fade" id="tab-3" role="tabpanel">
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
                                                <div class="left">
                                                    <button class = "site-btn approve-btn">Approve</button>
                                                </div>
                                            </div>
                                            
										<?php
										}
										?>
                                        </div>
                                        <div class="personal-rating">
                                            <h6>Your Ratind</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="leave-comment">
                                            <h4>Leave A Comment</h4>
                                            <form action="<?php echo $level.data_path.'addcomment.php';?>" method ="get" class="comment-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text"  name="author" placeholder="Name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                    <input type="textarea" name="cmt" placeholder="Messages"></textarea>
								
														<input type="textarea" name="productid" hidden ="true" value="<?php echo $product[0]['productid'];?>">
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>