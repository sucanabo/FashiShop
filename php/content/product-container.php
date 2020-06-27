
<div class="<?php if($lg12 == true ){echo 'col-lg-12';} else echo 'col-lg-9';?> order-1 order-lg-2">
                    <?php include_once($level.php_path.content_path.'product-show-option.php'); ?>
                    <div class="product-list">
                        <div class="row">
                        <?php
	?>
                            <?php 
                            //tetst
                                foreach($product as $pd){
                                    ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="pi-pic">
											<a href ="<?php echo $level.pages_path.'product.php?productid='.$pd['productid']; ?>">
                                                <img src="<?php echo $level.img_path.$pd['img']; ?>" alt="">
												</a>
                                                <?php 
                                                    if($pd['salebox'] != 'FALSE')
                                                        include ($level.php_path.content_path.'sale-box.php');
                                                ?>
                                                <div class="icon">
                                                    <i class="icon_heart_alt"></i>
                                                </div>
                                                <ul>
                                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                    <li class="quick-view"><a href="<?php echo $level.pages_path.'product.php?productid='.$pd['productid']; ?>">+ Quick View</a></li>
                                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name"><?php echo $pd['ctname'];?></div>
                                                <a href="#">
                                                    <h5><?php echo $pd['prname'];?></h5>
                                                </a>
                                                <div class="product-price">
                                                <?php echo '$'.$pd['price'];?>
                                                    <span><?php echo '$'.$pd['saleprice'];?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div>
                    <p> Phan trang </p>
                    <?php
                        $page=0;//khởi tạo trang ban đầu
                        $limit=3;//số bản ghi trên 1 trang (2 bản ghi trên 1 trang)
                        $total_record = sizeof($product);//tính tổng số bản ghi select được
                        $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia
                        include_once($level.data_path.'phantrang.php');
                    ?>
			<!-- 'start hiện nút phân trang' -->
			<div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					<?php for($i=1;$i<=$total_page;$i++){ ?>
				    <li <?php if($page == $i) echo "class='active'"; ?> >
						<a href="<?php echo $level.data_path."phantrang.php?page=".$i."&limit=".$limit; ?>">
							<?php echo $i; ?>
						</a>
					</li>
				    <?php } ?>
				</ul>
			</div>
			<!-- 'end hiện nút phân trang' -->
                </div>
