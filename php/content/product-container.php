<div class="<?php if($lg12 == true ){echo 'col-lg-12';} else echo 'col-lg-9';?> order-1 order-lg-2">
    <?php include_once($level.php_path.content_path.'product-show-option.php'); ?>
        <div class="product-list">
            <?php
                $checkcart=false;
                if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $k)
                        {
                            if(isset($k))
                            {
                                $checkcart=true;
                            }
                        }
                    }
                if ($checkcart ==false)
                    {
                        echo '<p>You don\'t have any item in cart</p>';
                    } 
                    else 
                    {
                        $items = $_SESSION['cart'];
                        echo '<p>You have <a href="shopping-cart.php">'.count($items).' item in cart</a></p>';
                    }                     
            ?>
                <div class="row">
                            <?php 
                            //tetst
                                foreach($product as $pd)
                                {
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

                                                <ul>
                                                    <li class="w-icon active"><a href="<?php echo $level.data_path."add_cart.php?id=".$pd['productid'] ?>"><i class="icon_bag_alt"></i></a></li>
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
                                                    <span><?php if($pd['saleprice']!=null)
                                                     echo '$'.$pd['saleprice'];
                                                     else echo $pd['saleprice'];
                                                    ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>
                
                    <div class="pagination">
                    <?php
                    if(isset($_GET['name'])==true)
                    {
                        
                        $name=$_GET['name'];
                        $count =DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id  and catagory.name = ? ",[$name],2);
                    }
                    else if(isset($_GET['namegender'])==true)
                    {
                        $namegender = $_GET['namegender'];
                        $count = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id and gender =?",[$namegender],2);
                    }
                    else if(isset($_GET['min'])==true&& isset($_GET['max'])==true) 
                    {
                        $min = $_GET['min'];
                        $max = $_GET['max'];
                        $count = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id and price between $min and $max",[],2);
                    }
                    $page=1;//khởi tạo trang ban đầu
                    $limit=6;//số'' bản ghi trên 1 trang (2 bản ghi trên 1 trang)
                    $total_record = sizeof($count);//tính tổng số bản ghi select được
                    $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia?>
                            <a href="<?php echo $level.pages_path."shop.php?page=1"."&limit=".$limit; ?>">&laquo;</a>
                            <?php for($i=1;$i<= $total_page;$i++){ ?>
                            <?php if($page == $i)  ?> 
                            <a href="<?php echo $level.pages_path."shop.php?page=".$i."&limit=".$limit ; ?>"><?php echo $i; ?></a>
                            <?php } ?>
                            <a href="<?php echo $level.pages_path."shop.php?page=$total_page"."&limit=".$limit; ?>">&raquo;</a>
                        </div>
                    </div>
</div>
