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
        <div class="container about-us">
            <h1 class="pages-title text-center text-primary">
                About Us
            </h1>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor
                sit amet..", comes from a line in section 1.10.32
                <br><br>
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
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