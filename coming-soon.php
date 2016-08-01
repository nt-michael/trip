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

    <title>Trips | Travel Booking Site Template</title>

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
                    <h3>UNDER CONSTRUCTION</h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                            <div class="post-wrapper text-center clearfix">
                                <h2>THIS SITE IS UNDER CONSTRUCTION!</h2>
                                <h6>WE’RE WORKING ON SOME IMPROVEMENTS AND WILL COME BACK IN</h6>

                                <div id="countdown" class="row">
                                    <div class="dash weeks_dash col-md-15">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">weeks</span>
                                    </div>
                                    <div class="dash days_dash col-md-15">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">days</span>
                                    </div>
                                    <div class="dash hours_dash col-md-15">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">hours</span>
                                    </div>
                                    <div class="dash minutes_dash col-md-15">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">minutes</span>
                                    </div>
                                    <div class="dash seconds_dash col-md-15">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">seconds</span>
                                    </div>
                                </div> <!-- end of countdown -->

                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
                    </div><!-- end row -->
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
    <script src="js/jquery.lwtCountdown-1.0.js"></script>

    <script>
    (function($) {
        "use strict";
            jQuery(document).ready(function() {
                $('#countdown').countDown({
                    targetDate: {
                        'day':      10,
                        'month':    1,
                        'year':     2016,
                        'hour':     11,
                        'min':      0,
                        'sec':      0
                    }
                });
            });
        })(jQuery);
    </script>

</body>

</html>