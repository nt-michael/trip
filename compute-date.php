<?php
	session_start();
    $in = $_POST['in_date'];
    $out = $_POST['out_date'];
    $date1 = new DateTime($in); $date2 = new DateTime($out); $diff = date_diff($date1, $date2); $timeframe = $diff->d;
    $_SESSION['date'] = $timeframe;
    $_SESSION['checkin'] = $_POST['in_date'];
	$_SESSION['checkout'] = $_POST['out_date'];
	header('location:hotel-checkout.php');
    ?>