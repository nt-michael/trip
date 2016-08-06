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

    <title>WAZOO | All you need for a perfect holiday...</title>

    <!-- Favicons -->
    <script src="https://use.fontawesome.com/47b573b621.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
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
    
    <div class="topbar">
        <div class="container">
            <div class="pull-left">
                <ul class="topbar-drops list-inline">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wallet17"></i> DOLLAR</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">NEW LIRA</a></li>
                            <li><a href="#">EURO</a></li>
                            <li><a href="#">RUPI</a></li>
                            <li><a href="#">DINNAR</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-globe"></i> ENGLISH</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                        </ul>
                    </li>
                    <li><i class="icon-telephone5"></i> 1800-3456-7891</li>
                </ul><!-- end list-style -->
            </div><!-- end left -->
            <div class="pull-right">
                <ul class="topbar-social list-inline">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-flickr"></i></a></li>
                    <li><a href="login.php">MY ACCOUNT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul><!-- end list-style -->
            </div><!-- end right -->
        </div><!-- end container -->
    </div><!-- end topbar -->

    <!--Header goes here-->
        <?php include"header.php"; ?>
    <!--End of Header-->

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_04.jpg');" data-img-width="1920" data-img-height="1133" data-diff="100">
        <div class="container">
            <div class="row homeform">
                <div class="col-md-5 col-xs-12">
                    <div class="home-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab"><i class="icon-hotel68"></i></a></li>
                            <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab"><i class="icon-bus7"></i></a></li>
                            <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab"><i class="icon-sedan3"></i></a></li>
                            <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab"><i class="icon-earth72"></i></a></li>
                            <li><a href="#tab_05" aria-controls="tab_05" role="tab" data-toggle="tab"><i class="ion-android-restaurant"></i></a></li>
                            <li><a href="#tab_06" aria-controls="tab_06" role="tab" data-toggle="tab"><i class="icon-basket"></i></a></li>
                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="tab_01">
                                <h6>Hotel Service</h6>
                                <form class="bookform form-inline row" action="hotels.php" method="POST">
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12" style="margin-bottom: 5%">
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="go">
                                                <option>Select a City or Region</option>
                                                <option value="douala">Douala</option>
                                                <option value="buea">Buea</option>
                                                <option value="baffoussam">Baffoussam</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="bamenda">Bamenda</option>
                                                <option value="limbe">Limbe</option>
                                                <option value="kribi">Kribi</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="in_date" required>
                                            <div class="input-group-addon"><strong>Check-In Date</strong>....&nbsp;<i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12 make-margin">
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="" name="out_date" required>
                                            <div class="input-group-addon"><strong>Check-Out Date</strong>&nbsp;<i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 4%">
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="budget" required>
                                                <option>Budget Range</option>
                                                <option value="10000">0 - 10,000 XAF ($20)</option>
                                                <option value="50000">0 - 50,000 XAF ($100)</option>
                                                <option value="100000">0 - 100,000 XAF ($200)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i> Find Hotels</button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab_02">
                                <h6>BUS Service</h6>
                                <form class="bookform form-inline row" action="bus-list.php" method="POST">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="from">
                                                <option>WHERE ARE YOU?</option>
                                                <option value="douala">Douala</option>
                                                <option value="buea">Buea</option>
                                                <option value="baffoussam">Baffoussam</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="bamenda">Bamenda</option>
                                                <option value="limbe">Limbe</option>
                                                <option value="kribi">Kribi</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="form-group make-margin col-md-12 col-sm-12 col-xs-12">
                                       <!-- <input type="text" class="form-control" placeholder=" Destination: Region, Town..."> -->
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="to">
                                                <option>WHERE WOULD YOU LIKE TO GO?</option>
                                                <option value="douala">Douala</option>
                                                <option value="buea">Buea</option>
                                                <option value="baffoussam">Baffoussam</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="bamenda">Bamenda</option>
                                                <option value="limbe">Limbe</option>
                                                <option value="kribi">Kribi</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 6%;">
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Departure Date" id="" name="date">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block">Ready? Go<i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab_03">
                                <h6>Car Rental</h6>
                                <form class="bookform form-inline row" action="car-list.php" method="POST">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5%;" >
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="city">
                                                <option disabled selected>Select a city?</option>
                                                <option value="douala">Douala</option>
                                                <option value="buea">Buea</option>
                                                <option value="baffoussam">Baffoussam</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="bamenda">Bamenda</option>
                                                <option value="limbe">Limbe</option>
                                                <option value="kribi">Kribi</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                            <input type="date" name="in" class="form-control" placeholder="From date" id="">
                                            <div class="input-group-addon"><strong>From Date</strong>&nbsp;<i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12 make-margin">
                                        <div class="input-group">
                                            <input type="date" name="out" class="form-control" placeholder="To date" id="">
                                            <div class="input-group-addon"><strong>To Date</strong>&nbsp;<i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 4%">
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="mark">
                                                <option disabled selected>Vehicle Type</option>
                                                <option value="toyota">Toyota</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="chrysler">Chrysler</option>
                                                <option value="audi">Audi</option>
                                                <option value="chevrolet">Chevrolet</option>
                                                <option value="nissan">Nissan</option>
                                                <option value="lezus">Lezus</option>
                                                <option value="bmw">BMW</option>
                                            </select>
                                        </div>
                                    </div> 
                                    -->

                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block">Search<i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab_04">
                                <h6>Touristic Tour</h6>
                                <form class="bookform form-inline row" method="POST" action="dest_list.php">
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12 make-margin">
                                        <select class="selectpicker" data-style="btn-white" name="tour">
                                                <option disabled selected>Select a city?</option>
                                                <option value="douala">Douala</option>
                                                <option value="buea">Buea</option>
                                                <option value="baffoussam">Baffoussam</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="bamenda">Bamenda</option>
                                                <option value="limbe">Limbe</option>
                                                <option value="kribi">Kribi</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i> Take a Tour</button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab_05">
                                <h6>Restaurant</h6>
                                <form class="bookform form-inline row" method="POST" action="rest.php">
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12 make-margin">
                                        <select class="selectpicker" data-style="btn-white" name="go">
                                                <option disabled selected>Select a city?</option>
                                                <option value="douala">Douala</option>
                                                <option value="buea">Buea</option>
                                                <option value="baffoussam">Baffoussam</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="bamenda">Bamenda</option>
                                                <option value="limbe">Limbe</option>
                                                <option value="kribi">Kribi</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block">Look-Up<i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab_06">
                                <h6>Buy an article</h6>
                                <form class="bookform form-inline row" action="destination-grid.php" method="POST">
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12 make-margin">
                                        <select class="selectpicker" data-style="btn-white">
                                                <option disabled selected>Select a category?</option>
                                                <option value="douala">Electronics</option>
                                                <option value="buea">Furniture</option>
                                                <option value="baffoussam">Men Cloths</option>
                                                <option value="yaounde">Women Cloths</option>
                                                <option value="bamenda">Baby Cloths</option>
                                                <option value="limbe">Accessories</option>
                                                <option value="kribi">Shoes</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block">Search<i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end homeform -->
                </div><!-- end col -->

                <div class="col-md-7 col-xs-12">
                    <div class="home-message">
                        <h1>LET’S DISCOVER THE<br>WORLD TOGETHER</h1>
                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong. You should definitely give it a shot :)</p>
                        <a href="#" class="btn btn-primary btn-lg border-radius">READ MORE</a>
                    </div><!-- end homemessage -->
                </div><!-- end col -->            
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="little-padding section section-light clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
                </div><!-- end col -->
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
                </div><!-- end col -->
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_03.png" alt="" class="img-responsive"></a>
                </div><!-- end col -->
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_04.png" alt="" class="img-responsive"></a>
                </div><!-- end col -->
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
                </div><!-- end col -->
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->  

    <section class="section clearfix">
        <div class="container">
            <div class="hotel-title">
                <h4>TOP POPULAR DESTINATIONS</h4>
            </div><!-- end hotel-title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="mini-desti row">
                        <div class="col-md-4">
                            <img src="upload/mini_desti_01.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>VALLE AURINA</h6>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6>$500</h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p>Template based on deep research on the most popular travel booking websites such as</p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row">
                        <div class="col-md-4">
                            <img src="upload/mini_desti_02.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>PRINCIPE FORTE DEI MARMI</h6>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6>$500</h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p>Template based on deep research on the most popular travel booking websites such as</p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row noborder">
                        <div class="col-md-4">
                            <img src="upload/mini_desti_03.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>VOGLAUER QUADRO</h6>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6>$500</h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p>Template based on deep research on the most popular travel booking websites such as</p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="mini-desti row">
                        <div class="col-md-4">
                            <img src="upload/mini_desti_04.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>VALLE AURINA</h6>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6>$500</h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p>Template based on deep research on the most popular travel booking websites such as</p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row">
                        <div class="col-md-4">
                            <img src="upload/mini_desti_05.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>PRINCIPE FORTE DEI MARMI</h6>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6>$500</h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p>Template based on deep research on the most popular travel booking websites such as</p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row noborder">
                        <div class="col-md-4">
                            <img src="upload/mini_desti_06.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>VOGLAUER QUADRO</h6>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6>$500</h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p>Template based on deep research on the most popular travel booking websites such as</p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->  

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_03.jpg');" data-img-width="1920" data-img-height="586" data-diff="10">
        <div class="container">
            <div id="testimonials">
                <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h3>THE TRIPS SAVED MY LIFE!</h3>
                        <hr>
                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo<br>
                            travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong.<br>
                            You should definitely give it a shot :)</p>
                        <h6>- DAVID / CEO AGODA -</h6>
                    </div>
                </div><!-- end testi-item -->

                <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h3>THANKS YOU TRIPS! THIS IS AMAZING TRAVEL!</h3>
                        <hr>
                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo<br>
                            travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong.<br>
                            You should definitely give it a shot :)</p>
                        <h6>- DAVID / CEO AGODA -</h6>
                    </div>
                </div><!-- end testi-item -->
            </div><!-- end testimonials -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="nopadding clearfix">
        <div class="owl-fullwidth">
            <div class="owl-item-full">
                <img src="upload/home_mini_slider_02.jpg" alt="">
            </div>
            <div class="owl-item-full">
                <img src="upload/home_mini_slider_01.jpg" alt="">
            </div>
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix section-bottom">
        <div class="container">
            <div class="hotel-title">
                <h3>OUR SERVICES</h3>
                <hr class="left">
            </div><!-- end hotel-title -->
            <div class="row">
                <div class="col-md-9">
                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-hotel16"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                        <h5>HOTEL ONLINE BOOKING SERVICE</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-bus7"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                        <h5>BOOK CHEAP FLIGHTS ONLINE</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-sedan3"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                        <h5>TAXI CAB BOOKING HOTLINES</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-location38"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                        <h5>TOUR GUIDE &amp; PRIVATE GUIDED TOURS</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-3">
                    <img src="upload/girl.png" alt="" class="img-responsive">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->  

    <section class="section section-light clearfix">
        <div class="container">
            <div class="top-destinations clearfix">
                <div class="hotel-title text-center">
                    <h3>BEST DESTINATIONS FOR SUMMER</h3>
                    <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo<br> travel, expedia, priceline, hotels.com,travelocity, kayak, orbitz, etc. This guys can’t be wrong.<br> You should definitely give it a shot :)</p>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix">
                            <div class="post-media clearfix">
                                <a href="blog-single.php"><img src="upload/home_desti_02.jpg" alt="" class="img-responsive"></a>
                            </div><!-- end post-media -->

                            <div class="post-title clearfix">
                                <div class="pull-left">
                                    <h5><a href="blog-single.php">AUSTRALIA</a></h5>
                                    <h6>990 PLACES</h6>
                                </div>
                                <div class="pull-right">
                                    <h5>FROM <span>$490</span></h5>
                                </div>
                            </div><!-- end ost-title -->
                            <div class="post-content clearfix">
                                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia, priceline, hotels.com, kayak, orbitz, etc. This guys can’t be wrong. You should definitely give it a shot :)</p>
                            </div><!-- end post-content -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-sm-6">
                        <div class="clearfix">
                            <div class="post-media clearfix">
                                <a href="blog-single.php"><img src="upload/home_desti_01.jpg" alt="" class="img-responsive"></a>
                            </div><!-- end post-media -->

                            <div class="post-title clearfix">
                                <div class="pull-left">
                                    <h5><a href="blog-single.php">ISTANBUL</a></h5>
                                    <h6>120 PLACES</h6>
                                </div>
                                <div class="pull-right">
                                    <h5>FROM <span>$331</span></h5>
                                </div>
                            </div><!-- end ost-title -->
                            <div class="post-content clearfix">
                                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia, priceline, hotels.com, kayak, orbitz, etc. This guys can’t be wrong. You should definitely give it a shot :)</p>
                            </div><!-- end post-content -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end related-hotels -->

            <hr>
            <br>

            <div class="clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.php"><img src="upload/hotel_01.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.php" title="">VALLE AURINA</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$500</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span><!-- end rating -->
                                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia..</p>
                            </div><!-- end hotel-wrapper -->                            
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.php"><img src="upload/hotel_02.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.php" title="">DELUXE HOTEL</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$500</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span><!-- end rating -->
                                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia..</p>
                            </div><!-- end hotel-wrapper -->                            
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.php"><img src="upload/hotel_03.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.php" title="">5STAR ARGANTINE</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$500</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span><!-- end rating -->
                                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia..</p>
                            </div><!-- end hotel-wrapper -->                            
                        </div><!-- end clearfix -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_05.jpg');" data-img-width="1921" data-img-height="665" data-diff="20">
        <div class="container">
            <div class="home-message text-center">
                <h1>LET’S DISCOVER THE<br>WORLD TOGETHER</h1>
                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo<br> travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong.<br> You should definitely give it a shot :)</p>
                <a href="#" class="btn btn-primary btn-lg border-radius">READ MORE</a>
            </div><!-- end homemessage -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix">
        <div class="container">
            <div class="popular-destinations clearfix">
                <div class="hotel-title">
                    <h5>NEWS AND UPDATES</h5>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix">
                            <div class="post-media clearfix">
                                <a href="blog-single.php"><img src="upload/home_blog_05.jpg" alt="" class="img-responsive"></a>
                            </div><!-- end post-media -->

                            <div class="post-title clearfix">
                                <h5><a href="blog-single.php">THAILAND BY TRAIN WITH EASTERN AND ORIENTAL EXPRESS</a></h5>
                            </div><!-- end ost-title -->

                            <div class="post-meta home-blog-list clearfix">
                                <span><i class="icon-attach"></i> 03 Feb 2015</span>
                                <span><i class="icon-map110"></i> Asia, Thailand</span>
                            </div><!-- ne dpost-meta -->
                            
                            <div class="post-content clearfix">
                                <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong. You should definitely give it a shot :) ed on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia.</p>
                            </div><!-- end post-content -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="row">
                            <div class="clearfix">
                                <div class="col-sm-6">
                                    <div class="post-media clearfix">
                                        <a href="blog-single.php"><img src="upload/home_blog_06.jpg" alt="" class="img-responsive"></a>
                                    </div><!-- end post-media -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="post-title clearfix">
                                        <h5><a href="blog-single.php">SANTORINI - GREECE</a></h5>
                                    </div><!-- end ost-title -->

                                    <div class="post-meta home-blog-list clearfix">
                                        <span><i class="icon-map110"></i> Greece, Santorina</span>
                                    </div><!-- ne dpost-meta -->
                                    
                                    <div class="post-content clearfix">
                                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia</p>
                                    </div><!-- end post-content -->
                                </div><!-- end col -->
                            </div><!-- end clearfix -->

                            <div class="clearfix">
                                <div class="col-sm-6">
                                    <div class="post-media clearfix">
                                        <a href="blog-single.php"><img src="upload/home_blog_07.jpg" alt="" class="img-responsive"></a>
                                    </div><!-- end post-media -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="post-title clearfix">
                                        <h5><a href="blog-single.php">YUCATAN - MEXICO..</a></h5>
                                    </div><!-- end ost-title -->

                                    <div class="post-meta home-blog-list clearfix">
                                        <span><i class="icon-map110"></i> Amerika, Mexico</span>
                                    </div><!-- ne dpost-meta -->
                                    
                                    <div class="post-content clearfix">
                                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia</p>
                                    </div><!-- end post-content -->
                                </div><!-- end col -->
                            </div><!-- end clearfix -->

                            <div class="clearfix">
                                <div class="col-sm-6">
                                    <div class="post-media clearfix">
                                        <a href="blog-single.php"><img src="upload/home_blog_08.jpg" alt="" class="img-responsive"></a>
                                    </div><!-- end post-media -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="post-title clearfix">
                                        <h5><a href="blog-single.php">ISTANBUL - TURKEY..</a></h5>
                                    </div><!-- end ost-title -->

                                    <div class="post-meta home-blog-list clearfix">
                                        <span><i class="icon-map110"></i> Asia, Turkey</span>
                                    </div><!-- ne dpost-meta -->
                                    
                                    <div class="post-content clearfix">
                                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo travel, expedia</p>
                                    </div><!-- end post-content -->
                                </div><!-- end col -->
                            </div><!-- end clearfix -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end related-hotels -->
        </div><!-- end container -->
    </section><!-- end section -->

    <article class="map-section">
        <div id="map"></div>
    </article><!-- end section -->

    <!--Footer goes here-->
    <?php include"footer1.php"; ?>
    <!--End of Footer-->

    <!-- Template core JavaScript's
    ================================================== -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
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