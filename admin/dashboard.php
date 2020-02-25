<?php
session_start();
if(isset($_SESSION['fcs_activation_status'])){		
	if($_SESSION['fcs_activation_status']==1){
		if($_SESSION['deleteStatus']==0){
			include 'master.php';
		}else{
			$message="you can't login. <br />because this account is deleted!";
		header("location:index.php?message=$message&messageDanger='danger'");
	}		
	}else{
		$message="you can't login. because this account is deactivated!";
		header("location:index.php?message=$message&messageDanger='danger'");
	}
}else{
		header("location:index.php");
	}
?>