<?php
	if(empty($_POST['editFeeId'])){
		header("location:manageFee.php");
	}
	$breadcrumb="Edit Fee";
	$pages="pages/addFee.php";
	include 'dashboard.php';
?>
