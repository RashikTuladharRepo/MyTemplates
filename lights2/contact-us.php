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
    <!--Requires Styles-->

</head>
<body id="top">


<!--header-->
<?php include "includes/_header.php"; ?>
<!--header-->


<!--About Us-->
<div class="container-fluid">
    <div class="row">
        <div class="container contact-us">
            <h1 class="pages-title text-center text-primary">
                Contact Us
            </h1>
            <div class="col-md-8">
                <form role="form" method="post" action="javascript:void(0);">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-user">&nbsp;</i></div>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Full Name">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-envelope">&nbsp;</i></div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-phone">&nbsp;</i></div>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-pencil">&nbsp;</i></div>
                        <textarea class="form-control" name="remarks" id="remarks" placeholder="Your Query Here"></textarea>
                    </div>

                    &nbsp;&nbsp;<button type="submit" class="btn btn-group-lg btn-success"><i class="glyphicon glyphicon-send">&nbsp;</i> Send</button>
                </form>
            </div>
            <div class="col-md-4">
                <img src="<?php echo $url; ?>images/contact-man.png" class="contact-man img-responsive">
            </div>
        </div>
    </div>
</div>
<!--About Us-->


<!--footer-->
<?php include "includes/_footer.php"; ?>
<!--footer-->


<!--Required Scripts-->
<script src="<?php echo $url; ?>scripts/jquery-1.9.1.min.js"></script>
<script src="<?php echo $url; ?>scripts/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>scripts/jquery.smoothscroll.js"></script>
<script src="<?php echo $url; ?>scripts/custom.js"></script>
<script src="<?php echo $url; ?>scripts/plugins.js"></script>
<!--Required Scripts-->

</body>
</html>