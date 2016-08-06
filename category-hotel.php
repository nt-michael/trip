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
                            <img src="<?php echo $_SESSION['grand']; ?>" alt="" class="img-responsive">
                            <div class="price">
                                <h6><?php echo $_SESSION['name']; ?> 8.4</h6>
                                <h2><small>FCFA</small><?php echo $_SESSION['price']; ?><span>/NIGHT</span></h2>
                                <a href="#" class="btn btn-primary btn-lg">BOOK NOW</a>
                            </div><!-- end price -->

                            <div class="thumbnails">
                                <?php
                                require "connect.php";
                                $get_images = "SELECT `Hotel-Image-Id`, `Hotel-id`, `Images`, `Type`, `Hotel-Desc`, `Price` FROM `hotel-images` WHERE `Hotel-id` = '".$_SESSION['hotel_id']."'";
                                $content_images = mysql_query($get_images);
                                    while ($row = mysql_fetch_assoc($content_images) ) {
                                        echo 
                                            "<a data-gal=\"prettyPhoto[product-gallery]\" rel=\"bookmark\" title=\"\" href=\"{$row['Images']}\"><img src=\"{$row['Images']}\" alt=\"\" class=\"img-responsive\"></a>
                                            ";
                                    }
                                ?>
                            </div><!-- end price -->

                            <div class="single-hotel-bottom">
                                <p>
                                    <i class="icon-location38"></i> <strong>Area:</strong><?php echo $_SESSION['location'];?> 
                                    <i class="icon-person199"></i> <strong>Rooms:</strong><?php echo $_SESSION['rooms']; ?>
                                    <i class="icon-wifi10"></i> <strong>Wifi:</strong><?php echo $_SESSION['wifi']; ?>
                                </p>
                            </div><!-- end bottom -->
                        </div><!-- end image -->

                        <hr class="hotel-hr">

                        <div class="row">
                            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                                <div class="book-widget">
                                    <div class="hotel-title">
                                        <h5>Check Out Other Rooms In This Hotel</h5>
                                    </div>
                                <!--
                                    <form class="bookform form-inline row">
                                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Check in" id="datepicker">
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Check out" id="datepicker1">
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                            <div class="dropdown">
                                                <select class="selectpicker" data-style="btn-white">
                                                    <option>Adults</option>
                                                    <option>2+1 with Bedroom + 2 Child</option>
                                                    <option>1+1 with Bedroom + 1 Child</option>
                                                    <option>2+1 with Bedroom + Full</option>
                                                    <option>Full Services 15 Days</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-6 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-block btn-normal"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                -->
                                    <div class="clearfix"></div>

                                    <div class="hotel-list">
                                        <div class="row border-bottom2">
                                            <div class="col-sm-5">
                                                <h6>ROOM TYPES</h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6>PRICE</h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6>NO.ROOMS</h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>ACTION</h6>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                            <?php
                                                require "connect.php";
                                                $get_images = "SELECT `Hotel-Image-Id`, `Hotel-id`, `Images`, `Type`, `Hotel-Desc`, `Price` FROM `hotel-images` WHERE `Hotel-id` = '".$_SESSION['hotel_id']."'";
                                                $content_images = mysql_query($get_images);
                                                while ($row = mysql_fetch_assoc($content_images) ) {
                                                    echo "
                                                        <div class=\"row\">
                                                            <div class=\"col-sm-5\">
                                                                <img src=\"{$row['Images']}\" alt=\"\" class=\"img-responsive alignleft\">
                                                                <p>{$row['Type']}</p>
                                                                <p class=\"lead\">{$row['Hotel-Desc']}</p>
                                                            </div>
                                                            <div class=\"col-sm-2 list-style-hotel\">
                                                                <h5>FCFA{$row['Price']}<span>/NIGHT</span></h5>
                                                            </div>
                                                            <div class=\"col-sm-2 list-style-hotel\">
                                                                <div class=\"dropdown selectmini\">
                                                                <!--
                                                                    <select class=\"selectpicker\" data-style=\"btn-white\">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                -->
                                                                </div>
                                                            </div>
                                                            <div class=\"col-sm-3 list-style-hotel\">
                                                                <a href=\"#\" class=\"btn btn-primary btn-normal border-radius\">BOOK NOW</a>
                                                            </div>
                                                        </div>

                                                        <div class=\"clearfix\"></div>
                                                        <hr>
                                                    ";
                                                }
                                            ?>

                                        <div class="clearfix"></div>
                                    </div><!-- end hotel-list -->

                                    <hr>
                                    <br>

                                    <div class="row hotel-desc">
                                        <div class="col-md-12">
                                            <h5>AMENITIES</h5>
                                            <p><?php echo $_SESSION['menities']; ?></p>
                                        </div>
                                    </div><!-- end row -->

                                    <br>

                                    <div class="row hotel-icon-list">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <?php
                                                require "connect.php";
                                                $get_facilties = "SELECT `Hotel`, `Hotel-id`, `hotel-icon`, `Hotel-facilty` FROM `Hotel-facilities` WHERE `Hotel` = '".$_SESSION['hotel_id']."'";
                                                $content_facilities = mysql_query($get_facilties);
                                                while ($row = mysql_fetch_assoc($content_facilities)) {
                                                    echo "<p><span class=\"icon-container\"><i class=\"{$row['hotel-icon']}\"></i></span> {$row['Hotel-facilty']}</p>
                                                        ";
                                                }
                                            ?>
                                        </div><!-- end col -->

                                    </div><!-- end hotel-icon-list -->

                                    <hr>
                                    <br>

                                    <div class="row hotel-desc">
                                        <div class="col-md-12">
                                            <h5>ABOUT THE HOTEL</h5>
                                            <p><?php echo $_SESSION['about']; ?></p>
                                        </div><!-- end col -->
                                    </div><!-- end hote-desc -->
                                </div><!-- end book-widget -->

                                <div class="clearfix"></div>
                                <hr>
                                <br>

                                <div class="leave-a-feedback text-center clearfix">
                                    <h6>FOR ANY ENQUIRY PLEASE DO <a href="contact.php">CONTACT US</a> WE SHALL GET BACK TO YOU IN LESS THAN 24Hrs</h6>
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