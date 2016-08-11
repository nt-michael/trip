<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WAZOO | <?php echo $_SESSION['name']; ?></title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

<div id="loader">
    <div class="loader-container">
        <h3 class="loader-back-text"><img src="images/loader.gif" alt="" class="loader"></h3>
    </div>
</div>

<div id="wrapper">
    <!--Header goes here-->
        <?php include"header1.php" ?>
    <!--End of Header-->

    <section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3><?php echo $_SESSION['name']; ?></h3>
                    <p>
                    <span class="rating">
                    <?php
                        $i = 0;
                        while ( $i < $_SESSION['grade']) {
                            echo "
                                <i class='fa fa-star'></i>
                            ";
                            $i++;
                        }
                    ?>
                    </span><!-- end rating -->
                    <?php echo $_SESSION['location']; ?></p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="single-hotel-wrapper">
                        <div class="single-hotel-image">
                            <img src="/upload/<?php echo$_SESSION['gImage']; ?>" alt="" class="img-responsive">
                            <div class="price">
                                <h6><?php echo $_SESSION['name']; ?></h6>
                                <h2><small>FCFA</small><?php echo $_SESSION['price']; ?><span></span></h2>
                                <a href="bus-checkout.php" class="btn btn-primary btn-lg">BOOK NOW</a>
                            </div><!-- end price -->

                            <div class="thumbnails">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" title="" href="upload/<?php echo $_SESSION['img1']; ?>"><img src="upload/<?php echo $_SESSION['img1']; ?>" alt="" class="img-responsive"></a>
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" title="" href="upload/<?php echo $_SESSION['img2']; ?>"><img src="upload/<?php echo $_SESSION['img2']; ?>" alt="" class="img-responsive"></a>
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" title="" href="upload/<?php echo $_SESSION['img3']; ?>"><img src="upload/<?php echo $_SESSION['img3']; ?>" alt="" class="img-responsive"></a>
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" title="" href="upload/<?php echo $_SESSION['img4']; ?>"><img src="upload/<?php echo $_SESSION['img3']; ?>" alt="" class="img-responsive"></a>
                            </div><!-- end price -->

                            <div class="single-hotel-bottom">
                                <p>
                                    <i class="icon-location38"></i> <strong>Area:</strong><?php echo $_SESSION['location']; ?>
                                </p>
                            </div><!-- end bottom -->
                        </div><!-- end image -->

                        <hr class="hotel-hr">

                        <div class="row">
                            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                                <div class="book-widget">

                                    <div class="row hotel-desc">
                                        <div class="col-md-12">
                                            <h5>Description</h5>
                                            <p><?php echo $_SESSION['desc']; ?></p>
                                        </div>
                                    </div><!-- end row -->

                                    <br>

                                    <hr>
                                    <br>

                                    <div class="row hotel-desc">
                                        <div class="col-md-12">
                                            <h5>ABOUT <?php echo $_SESSION['name']; ?></h5>
                                            <p><?php echo $_SESSION['about']; ?></p>
                                        </div><!-- end col -->
                                    </div><!-- end hote-desc -->
                                </div><!-- end book-widget -->

                                <div class="clearfix"></div>
                                <hr>
                                <br>

                                <div class="leave-a-feedback text-center clearfix">
                                    <h6>FOR ANY ENQUIRY PLEASE DO <a href="contact.php" target="_blank">CONTACT US</a> WE SHALL GET BACK TO YOU IN LESS THAN 24Hrs</h6>
                                </div><!-- end leave-a-feedback -->
                            </div><!-- end content -->

                        </div><!-- end row -->
                    </div><!-- end single-hotel-wrapper -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <!--Footer goes here-->
        <?php include"footer1.php" ?>
    <!--End of Footer-->

    <!-- Template core JavaScript's
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/circle.js"></script>
    <script src="js/progress.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/revslider.js"></script>

</body>

</html>