<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Vegist - Multipurpose eCommerce HTML Template</title>
        <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
        <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
        <meta name="author" content="spacingtech_webify">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="<?php echo base_url('FrontAssets/') ?>image/fevicon.png">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/bootstrap.min.css">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/simple-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/font-awesome.min.css">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/themify-icons.css">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/ionicons.min.css">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/owl.theme.default.min.css">
        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/swiper.min.css">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/animate.css">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/') ?>css/responsive.css">
    </head>
    <body class="home-1">
<!-- menu -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="<?php echo base_url() ?>">
                                <img src="<?php echo base_url('FrontAssets/') ?>image/logo1.png" alt="logo-image"
                                    class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- search start -->
                        <div class="header-element search-wrap">
                            <input type="text" name="search" placeholder="Search product.">
                            <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>
                        </div>
                        <!-- search end -->
                        <!-- header-icon start -->
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap user-wrap">
                                    <div class="acc-desk">
                                        <div class="user-icon">
                                            <a href="<?php echo base_url('FrontEnd/customerAccount') ?>" class="user-icon-desk">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                        <div class="user-info">
                                            <span class="acc-title">Account</span>
                                            <div class="account-login">
                                                <a href="<?php echo base_url('customerRegistration') ?>">Register</a>
                                                <a href="<?php echo base_url('customerLogin') ?>">Log in</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-mob">
                                        <a href="account.html" class="user-icon">
                                            <span><i class="icon-user"></i></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="side-wrap wishlist-wrap">
                                    <a href="<?php echo base_url("wishList") ?>" class="header-wishlist">
                                        <span class="wishlist-icon"><i class="icon-heart"></i></span>
                                        <span class="wishlist-counter">0</span>
                                    </a>
                                </li>
                                <li class="side-wrap cart-wrap">
                                    <div class="shopping-widget">
                                        <div class="shopping-cart">
                                            <a href="javascript:void(0)" class="cart-count">
                                                <span class="cart-icon-wrap">
                                                    <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                    <span id="cart-total" class="bigcounter">5</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- header-icon end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-area">
                            <div class="main-navigation navbar-expand-xl">
                                <div class="box-header menu-close">
                                    <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                </div>
                                <!-- menu start -->
                                <div class="navbar-collapse" id="navbarContent">
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link">
                                                    <a href="<?php echo base_url() ?>" class="link-title">
                                                        <span class="sp-link-title">Home</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="<?php echo base_url('shop') ?>"
                                                        class="link-title">
                                                        <span class="sp-link-title">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-mega-menu" data-bs-toggle="collapse"
                                                        class="link-title link-title-lg">
                                                        <span class="sp-link-title">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu mega-menu collapse"
                                                        id="collapse-mega-menu">
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Fresh food</h2>
                                                            <a href="#collapse-sub-mega-menu" data-bs-toggle="collapse"
                                                                class="sublink-title sublink-title-lg">
                                                                <span>Fresh food</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-sub-mega-menu">
                                                                <li class="supmenu-li"><a href="product.html">Fruit &
                                                                        nut</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Snack
                                                                        food</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Organics
                                                                        nut gifts</a></li>
                                                                <li class="supmenu-li"><a
                                                                        href="product.html">Non-dairy</a></li>
                                                                <li class="supmenu-li"><a
                                                                        href="product.html">Mayonnaise</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Milk
                                                                        almond</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Mixedfruits</h2>
                                                            <a href="#collapse-fruits-menu" data-bs-toggle="collapse"
                                                                class="sublink-title sublink-title-lg">
                                                                <span>Mixedfruits</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-fruits-menu">
                                                                <li class="supmenu-li"><a
                                                                        href="product.html">Oranges</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Coffee
                                                                        creamers</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Ghee
                                                                        beverages</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Ranch
                                                                        salad</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Hemp
                                                                        milk</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Nuts &
                                                                        seeds</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Bananas & plantains</h2>
                                                            <a href="#collapse-banana-menu" data-bs-toggle="collapse"
                                                                class="sublink-title sublink-title-lg">
                                                                <span>Bananas & plantains</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-banana-menu">
                                                                <li class="supmenu-li"><a href="product.html">Fresh
                                                                        gala</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Fresh
                                                                        berries</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Fruit &
                                                                        nut</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Fifts
                                                                        mixed fruits</a></li>
                                                                <li class="supmenu-li"><a
                                                                        href="product.html">Oranges</a></li>
                                                                <li class="supmenu-li"><a
                                                                        href="product.html">Oranges</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Apples berries</h2>
                                                            <a href="#collapse-apple-menu" data-bs-toggle="collapse"
                                                                class="sublink-title sublink-title-lg">
                                                                <span>Apples berries</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-apple-menu">
                                                                <li class="supmenu-li"><a href="product.html">Pears
                                                                        produce</a></li>
                                                                <li class="supmenu-li"><a
                                                                        href="product.html">Bananas</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Natural
                                                                        grassbeab</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Fresh
                                                                        green orange</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Fresh
                                                                        organic reachter</a></li>
                                                                <li class="supmenu-li"><a href="product.html">Balckberry
                                                                        100%organic</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-link">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">About Us</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Contact</span>
                                                    </a>
                                                </li>




                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- menu end -->
                                <div class="img-hotline">
                                    <div class="image-line">
                                        <a href="javascript:void(0)"><img
                                                src="<?php echo base_url('FrontAssets/') ?>image/icon_contact.png"
                                                class="img-fluid" alt="image-icon"></a>
                                    </div>
                                    <div class="image-content">
                                        <span class="hot-l">Hotline:</span>
                                        <span>0123 456 789</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart -->
    <div class="mini-cart">
        <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
        <?php ?>
        <div class="cart-item-title">
            <p>
                <span class="cart-count-desc">There are</span>
                <span class="cart-count-item bigcounter">4</span>
                <span class="cart-count-desc">Products</span>
            </p>
        </div>
        <ul class="cart-item-loop">
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product.html">
                        <img src="<?php echo base_url('FrontAssets/') ?>image/cart-img.jpg" alt="cart-image"
                            class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product.html">Fresh apple 5kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product.html">
                        <img src="<?php echo base_url('FrontAssets/') ?>image/cart-img02.jpg" alt="cart-image"
                            class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product.html">Natural grassbean 4kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$300.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product.html">
                        <img src="<?php echo base_url('FrontAssets/') ?>image/cart-img03.jpg" alt="cart-image"
                            class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product.html">Organic coconut juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product.html">
                        <img src="<?php echo base_url('FrontAssets/') ?>image/cart-img04.jpg" alt="cart-image"
                            class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product.html">Orange juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$350.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="subtotal-title-area">
            <li class="subtotal-info">
                <div class="subtotal-titles">
                    <h6>Sub total:</h6>
                    <span class="subtotal-price">$750.00 USD</span>
                </div>
            </li>
            <li class="mini-cart-btns">
                <div class="cart-btns">
                    <a href="<?php echo base_url('index.php/FrontEnd/cartDetails') ?>" class="btn btn-style2">View cart</a>
                    <a href="<?php echo base_url('checkout') ?>" class="btn btn-style2">checkout</a>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- mobile menu -->
<!-- mobile menu start -->
<div class="header-bottom-area mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-menu-area">
                    <div class="main-navigation navbar-expand-xl">
                        <div class="box-header menu-close">
                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                        </div>
                        <!-- menu start -->
                        <div class="navbar-collapse" id="navbarContent01">
                            <div class="megamenu-content">
                                <div class="mainwrap">
                                    <ul class="main-menu">
                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Home </span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Shop </span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Blog </span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">About Us </span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Contact </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- menu end -->
                        <div class="img-hotline">
                            <div class="image-line">
                                <a href="javascript:void(0)"><img
                                        src="<?php echo base_url('FrontAssets/') ?>image/icon_contact.png"
                                        class="img-fluid" alt="image-icon"></a>
                            </div>
                            <div class="image-content">
                                <span class="hot-l">Hotline:</span>
                                <span>0123 456 789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile menu end -->