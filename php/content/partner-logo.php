<div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <?php 
                    foreach($partnerArr as $pn)
                    {
                        ?>
                            <div class="logo-item">
                                <div class="tablecell-inner">
                                    <img src="<?php echo $level.img_path.$pn ?>" alt="">
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>