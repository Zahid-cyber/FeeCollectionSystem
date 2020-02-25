	<?php
		$result=$objAdmin->viewUserWithId($_SESSION['fcs_user_id']);
		$row=mysqli_fetch_assoc($result);
		if(isset($_POST['editProfile'])&&($_POST['editProfile']==$row['user_password'])){
			include 'editProfileBody.php';
		}else{
			$message='password not matched!';
			?>
			<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=profile.php?message=<?php echo $message;?>&messageDanger='danger'">
			<?php
		}
	?>
