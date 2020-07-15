<form action="<?php echo $level.pages_path.'shop.php'?>">

<div class="filter-widget">
    <h4 class="fw-title">Price</h4>
    <div class="filter-range-wrap">
        <div class="range-slider">
            <div class="price-input">
            <a>Min :</a>
            <input type="number" method="GET" name="min" min="0" max="100" step="10" value="0" >-->
            <a>Max :</a>
            <input type="number" method="GET" name="max" <?php echo "number" ?> min="0" max="100" step="10" value="100">
            </div>
        </div>
        
        
    </div>
    <input type="submit" value="Filter"  class="filter-btn">
</div>
</form>