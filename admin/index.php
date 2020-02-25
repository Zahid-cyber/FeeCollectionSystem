<?php
    include '../classes/login.php';
    $objLogin=new Login();
    if(isset($_POST['login'])){
        $message=$objLogin->login($_POST);
    }
	if(isset($_SESSION['fcs_activation_status'])){
		if(($_SESSION['fcs_activation_status']==1)&&($_SESSION['deleteStatus']==0)){
			header('location:dashboard.php');
		}
	}
	// post message
    if(isset($message)){
        ?>
        <div class="btn-lg btn-danger text-center"><?php echo $message;?></div>
        <?php
    }
	// get message
	if(isset($_GET['message'])&&isset($_GET['messageDanger'])){
		?>
		<div class="btn-lg btn-danger text-center"><?php echo $_GET['message'];?></div>						
		<?php
	}
	else if(isset($_GET['message'])){
		?>
		<div class="btn-lg btn-success text-center"><?php echo $_GET['message'];?></div>						
		<?php
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Login page</title>	
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
					<h2>Login to your account</h2>
                                        <form class="form-horizontal" action="" method="post">
						<fieldset>
							
							<div class="input-prepend" title="email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="email" id="email" type="email" placeholder="type email" required />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password" required/>
							</div>
							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" name="login" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
                                        <hr>
					<h3>Have you not an account?</h3>
					<p>
						No problem, <a class='red' href="signup.php">click here</a> to get a new account.
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
