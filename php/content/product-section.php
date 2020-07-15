 <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                   <?php   
        //catagories
        include_once ($level.php_path.content_path.'sidebar-catagories.php');
        //brand
        //include_once ($level.php_path.content_path.'sidebar-brand.php');
        //price
        include_once ($level.php_path.content_path.'sidebar-price.php');
        //filter
        //include_once ($level.php_path.content_path.'sidebar-filter.php');
        //size
        //include_once ($level.php_path.content_path.'sidebar-size.php');
        //tags
        include_once ($level.php_path.content_path.'sidebar-tags.php');
    ?>
                    
                </div>
                <div class="col-lg-9">
				<?php
				
				foreach($product as $a)
				
				{
				?>
                    <div class="row">
                        <?php
						 include_once($level.php_path.content_path.'product-thumbs.php');
						?>
                        <div class="col-lg-6">
                            <div class="product-details">
                                
                               <?php
							   include_once($level.php_path.content_path.'pd-title.php');
							   include_once($level.php_path.content_path.'pd-rating.php');
							   include_once($level.php_path.content_path.'pd-desc.php');
							   include_once($level.php_path.content_path.'pd-color.php');

							   include_once($level.php_path.content_path.'pd-size.php');
							   include_once($level.php_path.content_path.'pd-tag.php');
							   include_once($level.php_path.content_path.'pd-share.php');
					
							   ?>
                               
                            </div>
                        </div>
                    </div>
					<?php
				}
				
				 
				?>
                    
				
				
				
				

				
					
				
                  
         
    <!-- Product Shop Section End -->