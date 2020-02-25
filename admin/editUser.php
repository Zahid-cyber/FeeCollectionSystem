<?php
	if(empty($_POST['editUserId'])){
		header("location:manageUser.php");
	}
	$breadcrumb="Edit user";
	$pages="pages/editUser.php";
	include 'dashboard.php';
?>


