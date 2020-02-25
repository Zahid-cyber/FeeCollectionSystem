<?php
//student section stat-------------------------------------------------------------
	//total  student with delete
	$totalStudentResult=$objAdmin->viewStudentAllWithDelete();
	$totalStudent=0;
	while($totalStudentRow=mysqli_fetch_assoc($totalStudentResult)){
		$totalStudent++;
	}
	
	//total arcive student
	$arciveStudentResult=$objAdmin->viewStudentArchive();
	$arciveStudent=0;
	while($arciveStudentRow=mysqli_fetch_assoc($arciveStudentResult)){
		$arciveStudent++;
	}
	
	//total active student
	$activeStudentResult=$objAdmin->viewActiveStudent();
	$activeStudent=0;
	while($activeStudentRow=mysqli_fetch_assoc($activeStudentResult)){
		$activeStudent++;
	}
	
	//total deactive student
	$deactiveStudentResult=$objAdmin->viewDectiveStudent();
	$deactiveStudent=0;
	while($deactiveStudentRow=mysqli_fetch_assoc($deactiveStudentResult)){
		++$deactiveStudent;
	}
	
	
	// percent of students
	$arciveP=$objAdmin->persent($totalStudent,$arciveStudent);
	$activeP=$objAdmin->persent($totalStudent,$activeStudent);
	$deactiveP=$objAdmin->persent($totalStudent,$deactiveStudent);
//student section emd-------------------------------------------------------------

//uesr section start-------------------------------------------------------------

	//total user
	$totalUserResult=$objAdmin->viewAllUserWithDelete();
	$totalUser=0;
	while($totalUsertRow=mysqli_fetch_assoc($totalUserResult)){
		$totalUser++;
	}
	//total arcive user
	$arciveUserResult=$objAdmin->viewAllUserArchive();
	$arciveUser=0;
	while($arciveUsertRow=mysqli_fetch_assoc($arciveUserResult)){
		$arciveUser++;
	}
	//total active user
	$activeUserResult=$objAdmin->viewAllActiveUser();
	$activeUser=0;
	while($activeUsertRow=mysqli_fetch_assoc($activeUserResult)){
		$activeUser++;
	}
	//total deactive user
	$deactiveUserResult=$objAdmin->viewAllDeactiveUser();
	$deactiveUser=0;
	while($deactiveUsertRow=mysqli_fetch_assoc($deactiveUserResult)){
		$deactiveUser++;
	}
	
	
	// percent of students
	$arciveUsrP=$objAdmin->persent($totalUser,$arciveUser);
	$activeUsrP=$objAdmin->persent($totalUser,$activeUser);
	$deactiveUsrP=$objAdmin->persent($totalUser,$deactiveUser);
//uesr section end-------------------------------------------------------------
//fee section start-------------------------------------------------------------


	//total fee without delete
	$feeResult=$objAdmin->vFeeWithouthDelete();
	$ttlfee=0;
	while($feeRow=mysqli_fetch_assoc($feeResult)){
		$ttlfee+=$feeRow['totalFee'];
	}
	//total delete fee
	$deleteFeeResult=$objAdmin->vDeleteFee();
	$ttlDltfee=0;
	while($deleteFeeRow=mysqli_fetch_assoc($deleteFeeResult)){
		$ttlDltfee+=$deleteFeeRow['totalFee'];
	}
//fee section end-------------------------------------------------------------
?>		
		<!--css-->
        <link rel="stylesheet" href="../assets/frontend/w3css/w3.css" />		
			<div class="row-fluid hideInIE8 circleStats w3-animate-bottom">
			

				<div class="span3 w3-animate-right" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox purple">
						<div class="header">Total students</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="100" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalStudent;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>
				<div class="span3 w3-animate-right" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox green">
						<div class="header">Active students</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $activeP;?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalStudent;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>	
				<div class="span3 w3-animate-left" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox yellow">
						<div class="header">Deactive students</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $deactiveP;?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalStudent;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>


				<div class="span3 noMargin w3-animate-left" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox red">
						<div class="header">Arcive  students</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="<?php echo $arciveP;?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalStudent;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>
			</div>		
			<div class="row-fluid w3-animate-zoom">
				
				<div class="span3 statbox purple w3-animate-right" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $totalStudent;?><i class="icon-arrow-up"></i></div>
					<div class="title">Students</div>
					<!-- <div class="footer">
						<a href="#"> read full report</a>
					</div> -->	
				</div>
				<div class="span3 statbox green w3-animate-right" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number"><?php echo $activeStudent;?><i class="icon-arrow-up"></i></div>
					<div class="title">Active Students</div>
				</div>
				<div class="span3 statbox yellow w3-animate-left" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number"><?php echo $deactiveStudent;?><i class="icon-arrow-down"></i></div>
					<div class="title">Deactive students</div>
				</div>
				<div class="span3 statbox red noMargin w3-animate-left" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $arciveStudent;?><i class="icon-arrow-down"></i></div>
					<div class="title">Arcive Students</div>
				</div>	
				
			</div>			
			<div class="row-fluid hideInIE8 circleStats w3-animate-top">
			

				<div class="span3 w3-animate-right" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox purple">
						<div class="header">Total users</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="100" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalUser;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>
				<div class="span3 w3-animate-right" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox green">
						<div class="header">Active users</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $activeUsrP;?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalUser;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>	
				<div class="span3 w3-animate-left" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox yellow">
						<div class="header">Deactive users</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $deactiveUsrP;?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalUser;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>


				<div class="span3 noMargin w3-animate-left" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox red">
						<div class="header">Arcive  users</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="<?php echo $arciveUsrP;?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?php echo $totalUser;?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>
			</div>		
			<div class="row-fluid w3-animate-zoom">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $totalUser;?><i class="icon-arrow-up"></i></div>
					<div class="title">Users</div>
					<!-- <div class="footer">
						<a href="#"> read full report</a>
					</div> -->	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number"><?php echo $activeUser;?><i class="icon-arrow-up"></i></div>
					<div class="title">Active users</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number"><?php echo $deactiveUser;?><i class="icon-arrow-down"></i></div>
					<div class="title">Deactive users</div>
				</div>
				<div class="span3 statbox red noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $arciveUser;?><i class="icon-arrow-down"></i></div>
					<div class="title">Arcive Users</div>
				</div>	
				
			</div>	
			<div class="row-fluid w3-animate-right">
				<div class="span12 statbox green" onTablet="span6" onDesktop="span12">
					<div class="number"><?php echo $ttlfee;?> TK</div>
					<div class="title">Total fee</div>
				</div>
				
			</div>	
			<div class="row-fluid w3-animate-left">
				<div class="span12 statbox red" onTablet="span6" onDesktop="span12">
					<div class="number"><?php echo $ttlDltfee;?> TK</div>
					<div class="title">Deleted fee</div>
				</div>
				
			</div>			

			
			<div class="row-fluid w3-animate-opacity">
				
				<div class="widget span5 red" onTablet="span5" onDesktop="span5">
					
					<h2><span class="glyphicons pie_chart"><i></i></span> Browsers Suggest</h2>
					
					<hr>
					
					<div class="content">
						
						<div class="browserStat big">
							<img src="../assets/backend/img/browser-chrome-big.png" alt="Chrome">
							<span>95%</span>
						</div>
						<div class="browserStat big">
							<img src="../assets/backend/img/browser-firefox-big.png" alt="Firefox">
							<span>70%</span>
						</div>
						<div class="browserStat">
							<img src="../assets/backend/img/browser-ie.png" alt="Internet Explorer">
							<span>30%</span>
						</div>
						<div class="browserStat">
							<img src="../assets/backend/img/browser-safari.png" alt="Safari">
							<span>20%</span>
						</div>
						<div class="browserStat">
							<img src="../assets/backend/img/browser-opera.png" alt="Opera">
							<span>95%</span>
						</div>	
								
						
					</div>
				</div>
				
				<div class="widget yellow span7 noMargin" onTablet="span7" onDesktop="span7">
					<h2><span class="glyphicons fire"><i></i></span> Server Load</h2>
					<hr>
					<div class="content">
						 <div id="serverLoad2" style="height:224px;"></div>
					</div>
				</div>
			
			</div>