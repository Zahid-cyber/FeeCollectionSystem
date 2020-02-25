<?php
	if(empty($_POST['editStudentId'])){
		header("location:manageStudent.php");
	}
	$breadcrumb="Edit Student";
	$pages="pages/addStudent.php";
	include 'dashboard.php';
?>


