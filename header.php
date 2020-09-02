<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>     
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title> <?php bloginfo(' name '); ?><?php wp_title('|');?></title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173588676-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173588676-1');
        </script>

    <?php wp_head();?>
</head>
<body <?php body_class();?>>

    <header>
        <div class="faixa-menu">
            <nav class="container"> 
                <h1 class="logo">
                    <span>
                        Na Caatinga
                    </span>
                </h1>      
                <ul class="navbar-nav menu-top">
                    <?php wp_nav_menu(array('theme_location' =>'menu_main'));?>                   
                </ul>
            </nav>
        </div> 
            <div class="col-md-12">     
                <?php motoPressSlider( "sliderTop" );?>
            </div>  
    </header>