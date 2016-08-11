<?php
	session_start();
	$_SESSION['car-id'] = $_GET['car-id'];
	$_SESSION['date-in'] = $_GET['date-in'];
	$_SESSION['date-out'] = $_GET['date-out'];
	$_SESSION['days'] = $_GET['days'];
	$_SESSION['agence-name'] = $_GET['agence'];
	$_SESSION['agence-location'] = $_GET['location'];
	$_SESSION['car-mark'] = $_GET['mark'];
	$_SESSION['car-desc'] = $_GET['desc'];
	$_SESSION['fair'] = $_GET['fair'];
	$_SESSION['grade'] = $_GET['grade'];
	$_SESSION['img1'] = $_GET['img1'];
	$_SESSION['img2'] = $_GET['img2'];
	$_SESSION['img3'] = $_GET['img3'];
	$_SESSION['img4'] = $_GET['img4'];
	$_SESSION['car-gImage'] = $_GET['grand'];
	header('location:car-single.php');
?>