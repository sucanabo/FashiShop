
<div class="filter-widget">
    <h4 class="fw-title">Price</h4>
    <div class="filter-range-wrap">
        <div class="range-slider">
            <div class="price-input" method ="get">
                <input type="text" name="pricemax" id="minamount">
                <input type="text" name="pricemin" id="maxamount">
            </div>
        </div>
        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
            data-min="33" data-max="98">
            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
            <span  tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
        </div>
    </div>
    <a href="<?php echo $level.pages_path.'shop.php'?> " class="filter-btn">Filter</a>
   

</div>