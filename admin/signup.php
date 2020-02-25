<?php
    include '../classes/login.php';
    $objLogin=new Login();
    if(isset($_POST['signup'])){
        $message=$objLogin->signup($_POST);
    }
	if(isset($_SESSION['fcs_activation_status'])){
		if($_SESSION['fcs_activation_status']==1){
			header('location:dashboard.php');
		}
	}
    if(isset($message)){
        ?>
        <div class="btn-lg btn-danger text-center"><?php echo $message;?></div>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Signup page</title>
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../assets/backend/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/backend/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../assets/backend/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../assets/backend/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
		
	<!-- start: Favicon -->
	<link rel="icon" href="../assets/frontend/img/icon/icon.gif">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(../assets/backend/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<h2>Create a new account</h2>
					<form class="form-horizontal" action="" method="post"  enctype='multipart/form-data' oninput="if(rePassword.value.trim().length>1){if(rePassword.value.trim().length==password.value.trim().length){if(password.value.trim()==rePassword.value.trim()){ o.value='Password and re-Password matched'}else{o.value='Password and re-Password not matched'}}else if(rePassword.value.trim().length>password.value.trim().length){o.value='Password and re-Password not matched'}}">
						<fieldset>
							
							<div class="input-prepend" title="file">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="file" id="file" type="file" accept='.jpg,.jpeg,.png,.gif' placeholder="add file"  />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="name">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="name" id="name" type="text" placeholder="type name" required />
							</div>
							<div class="clearfix"></div>


							<div class="input-prepend" title="email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="email" id="email" type="email" placeholder="type email" required />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" minlength='4' placeholder="type password" required/>
							</div>
							<div class="clearfix"></div>
							
							<div class="input-prepend" title="rePassword">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="rePassword" id="rePassword" type="password" placeholder="type re-Password" required/>
							</div>
							<div class="clearfix"></div>
							<center> 
								<label for="o"><output id="o"></output></label>							
							</center>
							<label class="remember" for="remember"><input type="checkbox" id="remember" required/> Accept <a href="Condition.php">Condition</a></label>

							<div class="button-login">	
								<button type="submit" name="signup" class="btn btn-primary">Signup</button>
							</div>
							<div class="clearfix"></div>
					</form>
                                        <hr>
					<h3>Have you an account?</h3>
					<p>
						<a class='red' href="index.php">click here</a> to login an account.
					</p>
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="../assets/backend/js/jquery-1.9.1.min.js"></script>
	<script src="../assets/backend/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="../assets/backend/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="../assets/backend/js/jquery.ui.touch-punch.js"></script>
	
		<script src="../assets/backend/js/modernizr.js"></script>
	
		<script src="../assets/backend/js/bootstrap.min.js"></script>
	
		<script src="../assets/backend/js/jquery.cookie.js"></script>
	
		<script src='../assets/backend/js/fullcalendar.min.js'></script>
	
		<script src='../assets/backend/js/jquery.dataTables.min.js'></script>

		<script src="../assets/backend/js/excanvas.js"></script>
	<script src="../assets/backend/js/jquery.flot.js"></script>
	<script src="../assets/backend/js/jquery.flot.pie.js"></script>
	<script src="../assets/backend/js/jquery.flot.stack.js"></script>
	<script src="../assets/backend/js/jquery.flot.resize.min.js"></script>
	
		<script src="../assets/backend/js/jquery.chosen.min.js"></script>
	
		<script src="../assets/backend/js/jquery.uniform.min.js"></script>
		
		<script src="../assets/backend/js/jquery.cleditor.min.js"></script>
	
		<script src="../assets/backend/js/jquery.noty.js"></script>
	
		<script src="../assets/backend/js/jquery.elfinder.min.js"></script>
	
		<script src="../assets/backend/js/jquery.raty.min.js"></script>
	
		<script src="../assets/backend/js/jquery.iphone.toggle.js"></script>
	
		<script src="../assets/backend/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="../assets/backend/js/jquery.gritter.min.js"></script>
	
		<script src="../assets/backend/js/jquery.imagesloaded.js"></script>
	
		<script src="../assets/backend/js/jquery.masonry.min.js"></script>
	
		<script src="../assets/backend/js/jquery.knob.modified.js"></script>
	
		<script src="../assets/backend/js/jquery.sparkline.min.js"></script>
	
		<script src="../assets/backend/js/counter.js"></script>
	
		<script src="../assets/backend/js/retina.js"></script>

		<script src="../assets/backend/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
