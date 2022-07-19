
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
        
        
        <!-- header start -->
        <?php include('src/header.php') ?>
        <!-- header end -->

        
       

        <!--home page slider start-->
        <section class="slider">
            <div class="home-slider owl-carousel owl-theme">
                <div class="items">
                    <div class="img-back" style="background-image:url(<?php echo base_url('FrontAssets/') ?>image/slider1.jpg);">
                        <div class="h-s-content slide-c-l">
                            <span>Summer vage sale</span>
                            <h1>Fresh fruits<br>&vegetable</h1>
                            <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="img-back" style="background-image:url(<?php echo base_url('FrontAssets/') ?>image/slider2.jpg);">
                        <div class="h-s-content slide-c-r">
                            <span>Organic indian masala</span>
                            <h1>Prod of indian<br>100% pacaging</h1>
                            <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="img-back" style="background-image:url(<?php echo base_url('FrontAssets/') ?>image/slider3.jpg);">
                        <div class="h-s-content slide-c-c">
                            <span>Top selling!</span>
                            <h1>Fresh for your health</h1>
                            <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home page slider start-->
        <!--banner start-->
        <section class="t-banner1 section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home-offer-banner">
                            <div class="o-t-banner">
                                <a href="product.html" class="image-b">
                                    <img class="img-fluid" src="<?php echo base_url('FrontAssets/') ?>image/banner-1.jpg" alt="banner image">
                                </a>
                                <div class="o-t-content">
                                    <h6>Fresh fruits, vagetable on our product</h6>
                                    <a href="product.html" class="btn btn-style1">Shop now</a>
                                </div>
                            </div>
                            <div class="o-t-banner">
                                <a href="product.html" class="image-b">
                                    <img class="img-fluid" src="<?php echo base_url('FrontAssets/') ?>image/banner-2.jpg" alt="banner image">
                                </a>
                                <div class="o-t-content banner-color">
                                    <h6>Vagetable eggplant 100% fresh food</h6>
                                    <a href="product.html" class="btn btn-style1">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- Category image slide -->
        <section class="category-img1 section-t-padding section-b-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Shop by category</h2>
                        </div>
                        <div class="home-category owl-carousel owl-theme">
                            <?php foreach($category as $c){ ?>
                            <div class="items">
                                <div class="h-cate">
                                    <div class="c-img">
                                        <a href="<?php echo base_url('FrontEnd/categoryProduct/') ?><?php echo $c->id ?>" class="home-cate-img">
                                            <img class="img-fluid" src="<?php echo base_url('product/category/') ?><?php echo $c->photo ?>" alt="cate-image">
                                            <span class="cat-title"><?php echo $c->name ?></span>
                                        </a>
                                    </div>
                                    <span class="cat-num">19 Items</span>
                                </div>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category image slide -->
        <!-- Trending Products Start -->
        <section class="h-t-products1 section-t-padding section-b-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Trending products</h2>
                        </div>
                        <div class="trending-products owl-carousel owl-theme">
                            
                            <?php foreach($trendingProduct as $trand){ 
                                if( $trand->tag=='New'){?>
                            <div class="items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $trand->id ?>">
                                            <img class="img-fluid" src="<?php echo base_url('product/product/') ?><?php echo $trand->photo_one ?>" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="<?php echo base_url('product/product/') ?><?php echo $trand->photo_two ?>" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text"><?php echo $trand->tag ?></span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="<?php echo base_url('FrontEnd/addToCart/') ?><?php echo $trand->id ?>" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $trand->id ?>"><?php echo $trand->name ?></a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price"><?php echo $trand->price ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $trand->id ?>">
                                            <img class="img-fluid" src="<?php echo base_url('product/product/') ?><?php echo $trand->photo_one ?>" alt="pro-img1">
                                            <img class="img-fluid additional-image" src="<?php echo base_url('product/product/') ?><?php echo $trand->photo_two ?>" alt="additional image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-discount"><?php echo $trand->tag ?></span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                        <a href="<?php echo base_url('FrontEnd/addToCart/') ?><?php echo $trand->id ?>" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $trand->id ?>"><?php echo $trand->name ?></a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price"><?php echo $trand->price ?>TK</span>
                                        <span class="old-price"><del>500 TK</del></span>
                                    </div>
                                </div>
                            </div>
                           <?php } }?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trending Products end -->
        <!-- Back-image and countdown star -->
        <section class="home-countdown1">
            <div class="back-img" style="background-image: url(<?php echo base_url('FrontAssets/') ?>image/dealbanner.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="deal-content">
                                <h2>Deal Of The Day!</h2>
                                <span class="deal-c">We offer a hot deal offer every festival</span>
                                <ul class="contdown_row">
                                    <li class="countdown_section">
                                        <span id="days" class="countdown_timer">254</span>
                                        <span class="countdown_title">Days</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="hours" class="countdown_timer">11</span>
                                        <span class="countdown_title">Hours</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="minutes" class="countdown_timer">33</span>
                                        <span class="countdown_title">Minutes</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="seconds" class="countdown_timer">36</span>
                                        <span class="countdown_title">Seconds</span>
                                    </li>
                                </ul>
                                <a href="grid-list.html" class="btn btn-style1">Shop collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Back image and countdown end -->
        <!-- Our Products Tab start -->
        <section class="our-products-tab section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Our products</h2>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home">SPECIAL PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile">NEW PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">BESTSELLER</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content pro-tab-slider">
                            <div class="tab-pane fade show active" id="home">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php foreach($homeProduct as $p){ 
                                            if($p->trend=='home'){?>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $p->id ?>">
                                                            <img src="<?php echo base_url('product/product/') ?><?php echo $p->photo_one ?>" alt="pro-img1" class="img-fluid">
                                                            <img src="<?php echo base_url('product/product/') ?><?php echo $p->photo_two ?>" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="<?php if($p->tag=='New'){ echo 'p-text';}else{ echo 'p-discount'; } ?>"><?php echo $p->tag ?></span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="<?php echo base_url('FrontEnd/addToCart/') ?><?php echo $p->id ?>" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $p->id ?>"><?php echo $p->name ?></a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price"><?php echo $p->price ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       <?php } }?>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                    <?php foreach($homeProduct as $p){ 
                                            if($p->trend=='profile'){?>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $p->id ?>">
                                                            <img src="<?php echo base_url('product/product/') ?><?php echo $p->photo_one ?>" alt="pro-img1" class="img-fluid">
                                                            <img src="<?php echo base_url('product/product/') ?><?php echo $p->photo_two ?>" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="<?php if($p->tag=='New'){ echo 'p-text';}else{ echo 'p-discount'; } ?>"><?php echo $p->tag ?></span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="<?php echo base_url('FrontEnd/addToCart/') ?><?php echo $p->id ?>" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $p->id ?>"><?php echo $p->name ?></a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price"><?php echo $p->price ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       <?php } }?>
                                   
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                    <?php foreach($homeProduct as $p){ 
                                            if($p->trend=='contact'){?>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $p->id ?>">
                                                            <img src="<?php echo base_url('product/product/') ?><?php echo $p->photo_one ?>" alt="pro-img1" class="img-fluid">
                                                            <img src="<?php echo base_url('product/product/') ?><?php echo $p->photo_two ?>" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="<?php if($p->tag=='New'){ echo 'p-text';}else{ echo 'p-discount'; } ?>"><?php echo $p->tag ?></span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="<?php echo base_url('FrontEnd/addToCart/') ?><?php echo $p->id ?>" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="<?php echo base_url('FrontEnd/productDetails/') ?><?php echo $p->id ?>"><?php echo $p->name ?></a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price"><?php echo $p->price ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       <?php } }?>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Products Tab end -->
        <!-- Testimonial Start -->
        <section class="section-tb-padding testimonial-bg1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Our customer say</h2>
                        </div>
                        <div class="testi-m owl-carousel owl-theme">
                            <div class="items">
                                <div class="testimonial-area">
                                    <span class="tsti-title">Frendly support</span>
                                    <p>I love your store! there is the largest selection of products of the exceptional quality and the lowest prices like in no other store.</p>
                                    <div class="testi-name">
                                        <h6>Williamson</h6>
                                        <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="testimonial-area">
                                    <span class="tsti-title">Frendly support</span>
                                    <p>I love your store! there is the largest selection of products of the exceptional quality and the lowest prices like in no other store.</p>
                                    <div class="testi-name">
                                        <h6>Jessica joy</h6>
                                        <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="testimonial-area">
                                    <span class="tsti-title">Frendly support</span>
                                    <p>I love your store! there is the largest selection of products of the exceptional quality and the lowest prices like in no other store.</p>
                                    <div class="testi-name">
                                        <h6>Jane deo</h6>
                                        <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->
        <!-- quick veiw start -->
        <section class="quick-view">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="quick-veiw-area">
                            <div class="quick-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-1">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                    <li class="nav-item items">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="<?php echo base_url('FrontAssets/') ?>image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quick-caption">
                                <h4>Fresh organic reachter</h4>
                                <div class="quick-price">
                                    <span class="new-price">$350.00 USD</span>
                                    <span class="old-price"><del>$399.99 USD</del></span>
                                </div>
                                <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-description">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                </div>
                                <div class="pro-size">
                                    <label>Size: </label>
                                    <select>
                                        <option>1 ltr</option>
                                        <option>3 ltr</option>
                                        <option>5 ltr</option>
                                    </select>
                                </div>
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                    <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick veiw end -->
        <!-- Blog start -->
        <section class="section-tb-padding blog1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Recent news</h2>
                        </div>
                        <div class="home-blog owl-carousel owl-theme">
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-1.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Green onion knife and salad plased</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">6 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-2.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">All time fresh every time healthy</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">1 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-3.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">1 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-4.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-5.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Organic mix masala fresh & soft</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-6.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Fresh organic brand and picnic</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="<?php echo base_url('FrontAssets/') ?>image/blog-image/blog-7.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Vegist special liquide fresh vegetable</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-blog">
                            <a href="blog-style-1-3-grid.html" class="btn btn-style1">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog end -->
        <!-- News Letter start -->
        <section class="news-letter1">
            <div class="section-tb-padding news-img" style="background-image: url(<?php echo base_url('FrontAssets/') ?>image/banner3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home-news">
                                <h2>Get the latest deals</h2>
                                <p>And receive 20% off coupon for first shopping</p>
                                <form>
                                    <input type="text" name="search" placeholder="Enter your email address">
                                    <button class="btn btn-style3">Subscribe</button>
                                    <button class="btn btn-style1 news-sub">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Letter end -->
        <!-- brand logo start -->
        <section class="section-tb-padding home-brand1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="brand-carousel owl-carousel owl theme">
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l1.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l2.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l3.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l4.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l5.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l6.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l7.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="items">
                                <div class="brand-img">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('FrontAssets/') ?>image/brand/home-123/l8.png" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand logo end -->
        <!-- footer start -->
       <?php include('src/footer.php') ?>