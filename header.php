<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mc-cilinder</title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="preload" as="font" type="font/woff" crossorigin="anonymous" href="<?= get_template_directory_uri() ?>/libs/slick/fonts/slick.woff">
    <?php rel_canonical(); ?>
</head>

<?php
global $template_dir;
$template_dir = get_template_directory_uri();
?>

<body>

<div class="bg-gray"></div>

<div class="inner-div">

    <div class="container-fluid header-top" id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 logo-wrapper">
                    <a href="/">
                        <img src="<?= $template_dir ?>/img/logo.jpg" alt="logo">
                    </a>
                </div>
                <div class="col-lg-3 text-wrapper d-none d-lg-block">
                    <p>Fantastische service, snelle levering en goede kwaliteit tegen een scherpe prijs. Echt een aanrader!</p>
                </div>
                <div class="col-lg-4 col-md-5 d-none d-md-block widget-wrapper ">
                    <a href="#" class="webshop">
                        <img src="<?= $template_dir ?>/img/Webshop-Keurmerk.jpg" alt="Webshop-Keurmerk">
                    </a>
                    <a href="#" class="kiyoh">
                        <div class="rating-wrapper"><img src="<?= $template_dir ?>/img/Kiyoh.jpg" alt="Kiyoh">
                        </div><div class="widget-part">
                            <div class="portal-wrapper">Kiyoh</div>
                            <div class="review-count-wrapper">
                                <div class="review-count">
                                    1282 beoordelingen
                                </div>
                            </div>
                            <div class="review-count-text">Beoordeel ons</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 d-md-none"><hr></div>
                <div class="col-lg-2 col-md-3 col-sm-6 phone-wrapper">
                    <div class="phone-block">
                        <div class="phone-icon">
                            <img class="svg" src="<?= $template_dir ?>/img/headset.svg" alt="headset">
                        </div><div class="phone-text">
                            <div class="help">Hulp nodig?</div>
                            <div class="phone"><a href="tel:0232050100">023 - 20 50 100</a></div>
                            <div class="write">
                                <img class="svg" src="<?= $template_dir ?>/img/pen.svg" alt="headset">
                                <span>Schrijf ons</span>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-menu-wrapper-sm"
                        aria-controls="navbar-main-menu-wrapper-sm" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars fa-lg icon-orange"></i><i class="fas fa-times fa-lg icon-orange"></i><span class="title">Меню</span>
                </button>-->
                <div class="collapse navbar-collapse main-menu-wrapper" id="navbar-main-menu-wrapper-sm">
                    <?php wp_nav_menu(array(
                        'menu' => 'main-menu',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto main-menu',
                        'walker' => new wp_bootstrap_navwalker())); ?>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-main-menu" id="navbar-main-menu">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-main-menu-wrapper"
                    aria-controls="navbar-main-menu-wrapper" aria-expanded="false" aria-label="Toggle navigation">
                <span class="title">Product catalogus</span>
            </button>
            <div class="collapse navbar-collapse main-menu-wrapper" id="navbar-main-menu-wrapper">
                <?php wp_nav_menu(array(
                    'menu' => 'main-menu',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto main-menu',
                    'walker' => new wp_bootstrap_navwalker())); ?>
            </div>

            <div class="search-wrapper ">
                <?php get_search_form(); ?>
                <div class="search-icon">
                    <img class="svg" src="<?= $template_dir ?>/img/search_black.svg" alt="search_black">
                </div>
            </div>

            <div class="phone-block ">
                <div class="phone-icon">
                    <img class="svg" src="<?= $template_dir ?>/img/headset.svg" alt="headset">
                </div>
                <div class="phone-text">
                    <div class="help">Hulp nodig?</div>
                    <div class="phone"><a href="tel:0232050100">023 - 20 50 100</a></div>
                </div>
            </div>

            <div class="cart-wrapper ">
                <div class="cart-icon">
                    <img class="svg" src="<?= $template_dir ?>/img/cart.svg" alt="cart">
                    <div class="count-circle">0</div>
                </div><div class="cart-text">
                    <div class="title">Winkelwagen</div>
                    <div class="amount">€0,00</div>
                </div>
            </div>
        </div>
    </nav>