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

    <title>WAZOO | Car booking service</title>

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
                        <li>Car Rental</li>
                    </ul>
                    <h3>Car Listing</h3>
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
<?php
$city = $_POST['city'];
//$go = 'Buea';
//$budget = 20000;
$in = $_POST['in'];
$out = $_POST['out'];
$_SESSION['in'] = $in;
$_SESSION['out'] = $out;
$date1 = new DateTime($in); $date2 = new DateTime($out); $diff = date_diff($date1, $date2); $_SESSION['days'] = $diff->d;
require "connect.php";
$car = "SELECT `car_id`, `agency_name`, `location`, `about`, `car_mark`, `car_desc`, `car_faire`, `city`, `grade`, `car_img`, `image2`, `image3`, `image4`, `grand-image` FROM `car` WHERE city = '".$city."'";

$list_cars = mysql_query($car);

while ($dis = mysql_fetch_assoc($list_cars)) {
    echo "
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"post-wrapper clearfix border-bottom\">
                                <div class=\"hotel-wrapper\">
                                    <div class=\"post-media\">
                                        <a href=\"list_to_cat_car.php?car-id={$dis['car_id']}&&date-in={$_SESSION['in']}&&date-out={$_SESSION['out']}&&days={$_SESSION['days']}&&agence={$dis['agency_name']}&&location={$dis['location']}&&mark={$dis['car_mark']}&&desc={$dis['car_desc']}&&fair={$dis['car_faire']}&&grade={$dis['grade']}&&img1={$dis['car_img']}&&img2={$dis['image2']}&&img3={$dis['image3']}&&img4={$dis['image4']}&&grand={$dis['grand-image']}\"><img src=\"upload/{$dis['car_img']}\" alt=\"\" class=\"img-responsive\"></a>
                                    </div><!-- end media -->
                                    <div class=\"post-title clearfix\">
                                        <div class=\"\">
                                            <h5><a href=\"car-single.php?car_id={$dis['car_id']}\" title=\"\">{$dis['car_mark']}</a></h5>
                                        </div><!-- end left -->
                                        <div class=\"pull-right\">
                                            <h6>{$dis['car_faire']}&nbsp;Fcfa</h6>
                                        </div><!-- end left -->
                                    </div><!-- end title -->
                                    <span class=\"rating\">
                                    ";
                                    $i = 0;
                             while ( $i < $dis['grade']) {
                                            echo "
                                                <i class='fa fa-star'></i>
                                            ";
                                            $i++;
                                        }
                                      
                                    echo "    
                                    </span><!-- end rating -->
                                    <p>{$dis['car_desc']}</p>
                                </div><!-- end hotel-wrapper -->                            
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
        ";
}
?>


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

</body>

</html>