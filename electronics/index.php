<!--test for update-->
<?php
include "lib/Getstatic.php";
$gs = new Getstatic();
$base_url = $gs->home_base_url();
?>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>Electronics Suppliers</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/electronics.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/templatemo_misc.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/hover.css">
    <link rel='stylesheet' id='camera-css'  href='styles/camera.css' type='text/css' media='all'>
    <style type="text/css">

    </style>
</head>
<body id="top">

<a href="#top"><div class="back-to-top"><i class="fa fa-angle-up"></i></div></a>
<div id="cover">
    <img src="images/preload.GIF" class="img-responsive">
    <img src="images/loading.GIF" class="img-responsive">
    <p class="text-primary font14">Please Wait For A While Untill The Contents Fully Loads.</p>
</div>


<div class="container-fluid header-contact-info">
    <div class="container header-contact-info-contents">
        <div class="row pull-right">
            <span><i class="fa fa-phone"></i> +977-1-44010101</span>
            <span><i class="fa fa-envelope"></i> info@electronicsales.com</span>
        </div>
    </div>
</div>

<!--navigation-->
<div class="header">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hvr-wobble-bottom" href="#"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" class="hvr-push">Home</a></li>
                    <li><a href="#" class="hvr-push">About</a></li>
                    <li><a href="#" class="hvr-push">Service</a></li>
                    <li><a href="#" class="hvr-push">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!--navigation-->

<!--slider-->
<div class="container-fluid slider">
    <div class="slider-contents">
        You Won't Like To Miss The Chance!<br>
        Best Price You Will Find In The Market!<br>
        <a class="btn btn-primary font18">View The Offer!</a>
    </div>
</div>
<!--slider-->

<!--products-->
<div class="container-fluid products">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p1.jpg" class="img-rounded img-responsive" alt="product"
                     title="Product">

                <div class="products-list-description">
                    <h4>Iphone 7</h4>
                    <h5>The Best Smart Phone In Town</h5>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p2.jpg" class="img-responsive" alt="product" title="Product">

                <div class="products-list-description">
                    <h4>Mac Book Air</h4>
                    <h5>What To Have Next!</h5>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p3.jpg" class="img-responsive" alt="product" title="Product">

                <div class="products-list-description">
                    <h4>Nikon D2300</h4>
                    <h5>Get The Best Shot!</h5>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p4.jpg" class="img-responsive" alt="product" title="Product">

                <div class="products-list-description">
                    <h4>Apple Watch</h4>
                    <h5>Be Smart!</h5>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p5.jpg" class="img-responsive" alt="product" title="Product">

                <div class="products-list-description">
                    <h4>Samsung Galaxy S6</h4>
                    <h5>Next Generation Smart Phone!</h5>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p6.jpg" class="img-responsive" alt="product" title="Product">

                <div class="products-list-description">
                    <h4>Google Chrome Book</h4>
                    <h5>Love Google!</h5>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-->


<!--special offers-->
<div class="container-fluid offers">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1 class="text-center"><i class="fa fa-thumbs-o-up"></i> Offers & Special Discounts
                <small>Take The Advantage!</small>
            </h1>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="offers-list">
                <img src="<?php echo $base_url; ?>images/p1.jpg" class="img-responsive" alt="product"
                     title="Product">
                <div class="offers-list-description">
                    <h4>Iphone 7</h4>
                    Special Discount
                </div>
            </div>
        </div>
    </div>
</div>
<!--special offers-->

<!--index-about-->
<div class="container-fluid index-about">
    <div class="index-about-contents">
        <h1>Our Shop</h1>

        <h3>This is our shop and we love to work here!</h3>
        <a class="btn btn-lg btn-primary"><i class="fa fa-home"></i> About Us</a>
    </div>
</div>
<!--index-about-->

<!--new products-->
<div class="container-fluid  new-products">
    <div class="container">
        <div class="row">
            <!--carousel-->
            <div class="container">
                <div class="col-md-12 section-title">
                    <h1 class="text-center"><i class="fa fa-shopping-cart"></i> New Products
                        <small>Might Interest You!</small>
                    </h1>
                </div>

                <div class="col-md-12 small-horizontal-bar"></div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="our-listing owl-carousel">
                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p1.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Iphone 7</h5>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </span>
                                <br>
                                <a href="#" class="btn-custom">Know More &raquo;</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p2.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Mac Book Air</h5>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </span>
                                <br>
                                <a href="#" class="btn-custom">Know More &raquo;</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p3.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Nikon D2300</h5>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </span>
                                <br>
                                <a href="#" class="btn-custom">Know More &raquo;</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p4.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Apple Watch</h5>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </span>
                                <br>
                                <a href="#" class="btn-custom">Know More &raquo;</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p5.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Samsung Galaxy S6</h5>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </span>
                                <br>
                                <a href="#" class="btn-custom">Know More &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--carousel-->
        </div>
    </div>
</div>
<!--new products-->

<!--footer-->
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-justify">
                    <h2>Your Shop</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.
                </div>
            </div>
            <div class="col-md-4">
                <h2>Shop</h2>

                <div class="row">
                    <div class="col-md-6">
                        New Products<br>
                        Top Sellers<br>
                        Our Stores<br>
                        Contact Us<br>
                        About Us<br>
                        Visit Us
                    </div>
                    <div class="col-md-6">
                        New Products<br>
                        Top Sellers<br>
                        Our Stores<br>
                        Contact Us<br>
                        About Us<br>
                        Visit Us
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2>Subscribe</h2>

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Please Enter Your Email!">
                    </div>
                    <a type="submit" class="btn btn-success hvr-shadow"><i class="fa fa-envelope"></i> Subscribe</a>
                </form>

                <div class="social">
                    <i class="social-icon facebook-hover hvr-float-shadow"><i class="fa fa-facebook"></i></i>
                    <i class="social-icon twitter-hover hvr-float-shadow"><i class="fa fa-twitter"></i></i>
                    <i class="social-icon google-hover hvr-float-shadow"><i class="fa fa-google"></i></i>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="container-fluid" style="background-color: #F4F4F4;"><p class="text-center">Copyrights &copy; 2015</p></div>
<!--footer-->



<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/plugins.js"></script>
<script type="application/javascript">
    jQuery(document).ready(function ($) {
        'use strict';
        $(".our-listing").owlCarousel({
            items: 3,
            navigation: true,
            autoPlay: 5000,
            slideSpeed: 200,
            navigationText: ["&larr;", "&rarr;"],
        });
    });

    $(window).on('load', function () {
        $("#cover").fadeOut(200);
    });

    $(window).on('scroll', function() {
        var y_scroll_pos = window.pageYOffset;
        var scroll_pos_test = 100;
        if(y_scroll_pos > scroll_pos_test) {
            $('.back-to-top').fadeIn();
        }
        else
        {
            $('.back-to-top').fadeOut();
        }
    });
</script>
</body>
</html>
