<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo $level.css_path ?>bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $level.css_path ?>slicknav.min.css" type="text/css">
    <?php 
        if($shop_page){

        
    ?>

    <link rel="stylesheet" href="<?php echo $level.css_path ?>css_shop.css" type="text/css">
        <?php }
        else ?>
        <link rel="stylesheet" href="<?php echo $level.css_path ?>style.css" type="text/css"><?php}?>
</head>