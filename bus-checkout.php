<?php session_start(); ?>
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

    <title>WAZOO | Bus checkout for you reservation</title>

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
                    <ul class="c1 breadcrumb text-left">
                        <li><a href="/">Home</a></li>
                        <li>Bus Reservation</li>
                    </ul>
                    <h3>PAYMENT</h3>
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

                            <div class="price-range text-center clearfix row">
                                <div class="col-md-12">
                                    <img src="images/progress.png" class="img-responsive" alt="">
                                </div><!-- end price-range -->
                            </div><!-- end price-range -->

                            <div class="clearfix"></div>
                            <br>

                            <div class="price-details clearfix">
                                <div class="hotel-title">
                                    <h5>YOUR BOOKING DETAILS</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="upload/<?php echo $_SESSION['img1']; ?>" alt="" class="img-responsive">
                                            </div><!-- end col -->
                                            <div class="col-sm-6">
                                                <h6><?php echo $_SESSION['name']; ?></h6>
                                                <span class="rating clearfix">
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

                                                <ul class="clearfix">
                                                    <li><span>DEPATURE:</span> <?php echo $_SESSION['from']; ?></li>
                                                    <li><span>DESTINATION:</span> <?php echo $_SESSION['to']; ?></li>
                                                    <li><span>DATE:</span> <?php echo $_SESSION['date']; ?></li>
                                                    <li><span>LOCATION:</span> <?php echo $_SESSION['location']; ?></li>
                                                    <li><span>No OF PERSONS:</span> 1</li>
                                                </ul>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end col -->

                                    <div class="col-md-4">
                                        <div class="bookprice">
                                            <p><strong class="pull-left">1 Person</strong> <strong class="pull-right">Fcfa <?php echo $_SESSION['price']; ?></strong></p>
                                            <div class="clearfix"></div>
                                            <br>
                                            <p class="lead">A fee of 5% will be added on the amount, as transaction fee which sum up-to <strong><?php $p = $_SESSION['price']; $sum = ((($p*5)/100)+$p); echo $sum; ?> Fcfa</strong></p>
                                        </div><!-- end bookprice -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end pricing-details -->

                            <div class="clearfix"></div>
                            <br>
                            <hr>
                            <br>

                            <form id="infoform">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="hotel-title">
                                            <h5>YOUR INFORMATION</h5>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control" placeholder="First *"> 
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Last *"> 
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Email *"> 
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Confirm Email *"> 
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Phone Number"> 
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Country of Passport"> 
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Extra notes goes here.."></textarea>
                                            </div>                   
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label>I’m not staying at the hotel. I’m making this booking for someone else.</label>
                                            </div>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-6">
                                        <div class="hotel-title">
                                            <h5>YOUR PAYMENT DETAILS</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <h6>SELECT YOUR PAYMENT METHOD <img src="images/payment.png" alt=""></h6>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row labels-wrapper">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Visa
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="option1"> PayPal
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1"> AmericanExpress
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox4" value="option1"> JCB
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox5" value="option1"> MasterCard
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox6" value="option1"> CardBlue
                                                        </label>
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="clearfix"></div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hotel-title">
                                                    <h6>Card Number</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="XXXX"> 
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="XXXX"> 
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="XXXX"> 
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="XXXX"> 
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="clearfix"></div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="hotel-title">
                                                    <h6>Card Holder Name</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="John DEO"> 
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="clearfix"></div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="hotel-title">
                                                    <h6>EXPRIY DATE</h6>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Check in" id="datepicker">
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-sm-6">
                                                <div class="hotel-title">
                                                    <h6>CVC CODE</h6>
                                                </div>
                                                <input type="text" class="form-control" placeholder="XXX"> 
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end col 6 -->
                                </div><!-- end row -->
                                <br>
                                <hr>
                                <br>
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <p>By selecting to complete this booking I acknowledge that I have read and accept <a href="#">the rules</a> & <a href="#">restrictions terms</a> & <a href="#">conditions</a>, and <a href="#">privacy policy</a>.</p>
                                        <br>
                                        <a href="#" class="btn btn-primary btn-normal btn-lg">PAY AND BOOK NOW</a>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </form><!-- end form -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <!--footer goes here-->
        <?php include"footer1.php" ?>
    <!--End of footer-->

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
<?php
    session_unset();
?>