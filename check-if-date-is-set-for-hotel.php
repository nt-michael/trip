<?php
	session_start();
	#http://localhost:2000/check-if-date-is-set-for-hotel.php?type=Classic&&date=7&&checkin=2016-08-16&&checkout=2016-08-23&&image=/upload/hotel_01.png&&price=8000&&location=25%20Marine%20Parade,%20Singapore%20449536,%20Singapore%20(Formerly%20East%20Village%20Hotel)&&hotel-name=VALLE%20AURINA&&grade=4
	if (!empty($_GET['date'])) {
		$_SESSION['type-of-room'] = $_GET['type'];
		$_SESSION['date'] = $_GET['date'];
		$_SESSION['checkin'] = $_GET['checkin'];
		$_SESSION['checkout'] = $_GET['checkout'];
		$_SESSION['image'] = $_GET['image'];
		$_SESSION['price'] = $_GET['price'];
		$_SESSION['location'] = $_GET['location'];
		$_SESSION['hotel_name'] = $_GET['hotel-name'];
		$_SESSION['grade'] = $_GET['grade'];
		header('location:hotel-checkout.php');
		
	}
	else {
		$_SESSION['type-of-room'] = $_GET['type'];
		$_SESSION['image'] = $_GET['image'];
		$_SESSION['price'] = $_GET['price'];
		$_SESSION['location'] = $_GET['location'];
		$_SESSION['hotel_name'] = $_GET['hotel-name'];
		$_SESSION['grade'] = $_GET['grade'];
		header('location:set-Hoteldate.php');
	}
?>