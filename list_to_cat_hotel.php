<?php
session_start();
session_unset($_SESSION['menities']);
session_unset($_SESSION['about']);
	$_SESSION['hotel_id'] = $_GET['hotel_id'];
	$_SESSION['img'] = $_GET['imgx'];
	$_SESSION['name'] = $_GET['name'];
	$_SESSION['desc'] = $_GET['desc'];
	$_SESSION['grade'] = $_GET['grade'];
	$_SESSION['price'] = $_GET['price'];
	$_SESSION['type-of-room'] = $_GET['type'];
	$_SESSION['location'] =  $_GET['location'];
	$_SESSION['grand']  = $_GET['grand-image'];
	$in = $_GET['date-in'];
    $out = $_GET['date-out'];
	#echo $_SESSION['grade']."&nbsp;&nbsp;".$_SESSION['price'];
	#list_to_cat_hotel.php?hotel_id={$dis['hotel_id']}&&imgx={$dis['image']}&&name={$dis['name']}&&desc={$dis['desc']}&&grade={$dis['grade']}&&price={$dis['price']}
	require "connect.php";

	$get_about = "SELECT `Hotel-single-id`, `Hotel-id`, `Wifi`, `No-of-rooms`, `Amenities`, `About` FROM `hotel-single` WHERE `Hotel-id` = '".$_GET['hotel_id']."'";
	$content_about = mysql_query($get_about);
	while ($row = mysql_fetch_assoc($content_about)) {
		$_SESSION['wifi'] = $row['Wifi'];
		$_SESSION['rooms'] = $row['No-of-rooms'];
		$_SESSION['menities'] =$row['Amenities'];
		$_SESSION['about'] = $row['About'];
	}

header("location:/category-hotel.php?in=$in&&out=$out");
?>