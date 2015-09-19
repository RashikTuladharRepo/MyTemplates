<?php
include "lib/Getstatic.php";
$gs=new Getstatic();
$url=$gs->baseUrl();
?>
<html>
<head>
    <title>Lights</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <!--Required Styles-->
    <link rel="shortcut icon" type="image/png" href="<?php echo $url; ?>images/logo.png"/>
    <link rel="stylesheet" href="<?php echo $url; ?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>styles/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $url; ?>styles/hover.css">
    <link rel="stylesheet" href="<?php echo $url; ?>styles/custom.css">
    <link rel="stylesheet" href="<?php echo $url; ?>styles/templatemo_misc.css">
    <link rel="stylesheet" href="<?php echo $url; ?>styles/bootstrap-magnify.min.css">
    <!--Requires Styles-->

</head>
<body id="top">


<!--header-->
    <?php include "includes/_header.php"; ?>
<!--header-->


<!--Breadcrumb-->
<div class="container">
    <ol class="breadcrumb font18">
        <li>Products</li>
        <li class="text-success text-bold">Product Details &raquo;</li>
    </ol>
</div>
<!--Breadcrumb-->


<!--Product Details-->
<div class="container product-details">
    <div class="col-md-4 product-details-image">
        <img data-toggle="magnify" src="images/p5.jpg" class="img-responsive">
    </div>
    <div class="col-md-8 product-details-description">
        <h1 class="text-primary">Dark Chandlier</h1>
        <h2>
            <small>
                <i class="fa fa-pencil">&nbsp;</i>Category: Chandliers
            </small>
        </h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p>
            <span class="product-price text-primary">NPR 390.00</span>
            <span class="text-success text-bold"><i class="fa fa-check">&nbsp;</i>Available On Stock</span>
            <span class="text-danger text-bold text-hide"><i class="fa fa-close">&nbsp;</i>Out of Stock</span>
        </p>
    </div>
</div>
<!--Product Details-->


<!--Products Comments-->
<div class="container product-comments">
    <h3 class="text-light-grey">Please Provide Us The Review of The Product &raquo;</h3>
    <div id="disqus_thread"></div>
    <noscript>
        Please enable JavaScript to view the
        <a href="https://disqus.com/?ref_noscript" rel="nofollow">
            comments powered by Disqus.
        </a>
    </noscript>
</div>
<!--Products Comments-->


<!--new products-->
<div class="container-fluid new-products">
    <div class="row">
        <!--carousel-->
<!--        <div class="container">-->
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
                            <h5>Wall Chandlier</h5>
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
                            <h5>Precious Chandlier</h5>
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
                            <h5>Night Chandlier</h5>
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
                            <h5>Switches</h5>
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
                            <h5>Solar Panels</h5>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </span>
                            <br>
                            <a href="#" class="btn-custom">Know More &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
<!--        </div>-->
        <!--carousel-->
    </div>
</div>
<!--new products-->


<!--footer-->
    <?php include "includes/_footer.php"; ?>
<!--footer-->


<!--Required Scripts-->
<script src="<?php echo $url; ?>scripts/jquery-1.9.1.min.js"></script>
<script src="<?php echo $url; ?>scripts/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>scripts/jquery.smoothscroll.js"></script>
<script src="<?php echo $url; ?>scripts/custom.js"></script>
<script src="<?php echo $url; ?>scripts/plugins.js"></script>
<script src="<?php echo $url; ?>scripts/bootstrap-magnify.min.js"></script>
<!--Required Scripts-->

</body>
</html>