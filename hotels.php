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

    <title>WAZOO | Hotel booking service</title>

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
                        <li>Hotels</li>
                    </ul>
                    <h3>Hotel Listing</h3>
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
$go = $_POST['go'];
$_SESSION['go_hotel'] = $go;
//$go = 'Buea';
//$budget = 20000;
$in = $_POST['in_date'];
$out = $_POST['out_date'];
$budget = $_POST['budget'];

$date1 = new DateTime($in);
$date2 = new DateTime($out);


//$diff = date_diff($date1, $date2);
//echo $diff->d;

//$_SESSION['book-date-for-hotel'] = $diff->d;

require "connect.php";
$h = "SELECT `hotel_id`, `name`, `image`, `desc`, `grade`, `price`, `town`, `type`, `location`, `grand-image` FROM `list_hotels` WHERE price <= '".$budget."' and town = '".$go."'";

$list_hotels = mysql_query($h);

while ($dis = mysql_fetch_assoc($list_hotels)) {
    echo "
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"post-wrapper clearfix border-bottom\">
                                <div class=\"hotel-wrapper\">
                                    <div class=\"post-media\">
                                        <a href=\"list_to_cat_hotel.php?hotel_id={$dis['hotel_id']}&&imgx={$dis['image']}&&name={$dis['name']}&&desc={$dis['desc']}&&grade={$dis['grade']}&&price={$dis['price']}&&type={$dis['type']}&&location={$dis['location']}&&grand-image={$dis['grand-image']}&&date-in={$in}&&date-out={$out}\"><img src=\"/upload/{$dis['image']}\" alt=\"\" class=\"img-responsive\"></a>
                                    </div><!-- end media -->
                                    <div class=\"post-title clearfix\">
                                        <div class=\"\">
                                            <h5><a href=\"list_to_cat_hotel.php?hotel_id={$dis['hotel_id']}&&imgx={$dis['image']}&&name={$dis['name']}&&desc={$dis['desc']}&&grade={$dis['grade']}&&price={$dis['price']}&&type={$dis['type']}&&location={$dis['location']}&&grand-image={$dis['grand-image']}&&date-in={$in}&&date-out={$out}\" title=\"\">{$dis['name']}</a></h5>
                                        </div><!-- end left -->
                                        <div class=\"pull-right\">
                                            <h6>{$dis['price']}&nbsp;Fcfa</h6>
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
                                    <p>{$dis['desc']}</p>
                                </div><!-- end hotel-wrapper -->                            
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
        ";
}
/*echo $_SESSION['out']."<br>";
echo $_SESSION['in'];
*/
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
<!--
down vote
accepted
I always advocate using the DateTime and DateInterval classes for this type of thing.

$date1 = new DateTime($_POST['startdate']);
$date2 = new DateTime($_POST['enddate']);

/** @var DateInterval $diff */
$diff = date_diff($date1, $date2);

// You can look at the documentation for DateInterval,
//  but suffice it to say that its member variable "d" refers to the "day" part of the difference
echo $diff->d;
-->