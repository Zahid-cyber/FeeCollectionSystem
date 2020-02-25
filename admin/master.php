<?php

	//obj admin
	include '../classes/admin.php';
	$objAdmin=new Admin();
	//logout
	if(isset($_GET['logout'])){
		$objAdmin->logout();
	}
	//add fee
	if(isset($_POST['submitFee'])){
		$objAdmin->addFee($_POST);
	}
	//update fee
	if(isset($_POST['updateFee'])){
		$objAdmin->updateFee($_POST);
	}
	// update Student
	if(isset($_POST['updateStudent'])){
		$objAdmin->updateStudent($_POST);
	}
	// update user
	if(isset($_POST['submitEditUser'])){
		$objAdmin->updateUser($_POST);
	}
	// update logged user
	if(isset($_POST['UpdateLoggedUser'])){
		$objAdmin->UpdateLoggedUser($_POST);
	}
	//add student
	if(isset($_POST['saveStudent'])){		
		$objAdmin->insertStudentinfo($_POST);
	}
	// delete fee arcive
	if(isset($_POST['deleteFeeid'])){
		$roll=$_POST['roll'];
		$deleteFeeid=$_POST['deleteFeeid'];
		$objAdmin->deleteFee($deleteFeeid,$roll);
	}
	// delete fee permanently
	if(isset($_POST['deleteFeeidPermanently'])){
		$roll=$_POST['roll'];
		$deleteFeeid=$_POST['deleteFeeidPermanently'];
		$objAdmin->deleteFeePermanently($deleteFeeid,$roll);
	}
	// restore fee arcive
	if(isset($_POST['restoreFeeId'])){
		$roll=$_POST['roll'];
		$restoreFeeId=$_POST['restoreFeeId'];
		$objAdmin->restoreFeeId($restoreFeeId,$roll);
	}
	// delete student arcive
	if(isset($_POST['deleteStudentid'])){
		$objAdmin->deleteStudent($_POST['deleteStudentid']);
	}
	// delete student permanently
	if(isset($_POST['deleteStudentidPermanently'])){
		$objAdmin->deleteStudentidPermanently($_POST['deleteStudentidPermanently']);
	}
	// restore student arcive
	if(isset($_POST['reStoreStudent'])){
		$objAdmin->reStoreStudent($_POST['reStoreStudent']);
	}
	
	// delete user arcive
	if(isset($_POST['deleteUserId'])){
		$objAdmin->deleteUserId($_POST['deleteUserId']);
	}
	// delete user permanently
	if(isset($_POST['deleteUserIdPermanently'])){
		$objAdmin->deleteUserIdPermanently($_POST['deleteUserIdPermanently']);
	}
	
	// restore user arcive
	if(isset($_POST['RestoreUserId'])){
		$objAdmin->RestoreUserId($_POST['RestoreUserId']);
	}
	
	//active student
	if(isset($_POST['activeStudent'])){
		$objAdmin->activeStudent($_POST['activeStudent']);
		
	}
	//deactive student
	if(isset($_POST['deactiveStudent'])){
		$objAdmin->deactiveStudent($_POST['deactiveStudent']);
		
	}
	//deactive user
	if(isset($_POST['deactiveUser'])){
		$objAdmin->deactiveUser($_POST['deactiveUser']);
		
	}
	//active user
	if(isset($_POST['activeUser'])){
		$objAdmin->activeUser($_POST['activeUser']);
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Dashboard</title>
        <!-- end: Meta -->
	
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
	<link rel="shortcut icon" href="../assets/frontend/img/icon/icon.gif">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Dashboard</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- end: Message Dropdown -->
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $_SESSION['fcs_user_name']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="profile.php"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="?logout=true"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">					
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Fee</span><span class="label label-important"><?php if($_SESSION['fcs_user_level']==1){ echo '3';}else{ echo '2';}?></span></a>
							<ul>
								<li><a class="submenu" href="addFee.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Fee</span></a></li>
								<li><a class="submenu" href="manageFee.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Fee</span></a></li>
								<?php
									if($_SESSION['fcs_user_level']==1){
								?>
									<li><a class="submenu" href="manageFeeArchive.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Fee Archive</span></a></li>
								<?php
									}
								?>
								
							</ul>	
						</li>						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Student</span><span class="label label-important"> <?php if($_SESSION['fcs_user_level']==1){ echo '3';}else{ echo '2';}?> </span></a>
							<ul>
								<li><a class="submenu" href="addStudent.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Student</span></a></li>
								<li><a class="submenu" href="manageStudent.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Student</span></a></li>
								<?php
									if($_SESSION['fcs_user_level']==1){
								?>
								<li><a class="submenu" href="manageStudentArchive.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Student Archive</span></a></li>							
								<?php
									}
								?>
							</ul>	
						</li>
						<?php
									if($_SESSION['fcs_user_level']==1){
								?>
								<li>									
									<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> User</span><span class="label label-important"> 2 </span></a>
									<ul>
										<li><a class="submenu" href="manageUser.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage User</span></a></li>
										<li><a class="submenu" href="manageUserArchive.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage User Archive</span></a></li>
									</ul>	
								</li>
								<?php
									}else{
								?>
								<li><a href="manageUser.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Manage User</span></a></li>
								<?php
									}
								?>
							
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="../">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="dashboard.php">Dashboard</a></li>
				<?php
					if(isset($breadcrumb)){
				?>				
					<i class="icon-angle-right"></i>	
					<li><a><?php echo $breadcrumb;?></a></li>
				<?php
					}
				?>
			</ul>
                            
                        <!-- call pages-->
			<div class="container-fluid">
				<?php
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
					if(isset($pages)){
						include $pages;
					}else{
						include 'default.php';
					}
				?>
			</div>
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">�</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2020 <a href="#" alt="Fee collection system">IBIT</a></span>
			
		</p>

	</footer>
	
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

                <script src="../assets/backend/js/alert.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
