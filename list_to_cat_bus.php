<?php
	session_start();
	$_SESSION['date'] = $_GET['date'];
	$_SESSION['busId'] = $_GET['bus_id'];
	$_SESSION['name'] = $_GET['name'];
	$_SESSION['desc'] = $_GET['desc'];
	$_SESSION['price'] = $_GET['price'];
	$_SESSION['grade'] = $_GET['grade'];
	$_SESSION['gImage'] = $_GET['grandImage'];
	$_SESSION['img1'] = $_GET['img1'];
	$_SESSION['img2'] = $_GET['img2'];
	$_SESSION['img3'] = $_GET['img3'];
	$_SESSION['img4'] = $_GET['img4'];
	$_SESSION['location'] = $_GET['location'];
	$_SESSION['about'] = $_GET['about'];
	$_SESSION['from'] = $_GET['from'];
	$_SESSION['to'] = $_GET['to'];
	header('location:bus-single.php');
?>