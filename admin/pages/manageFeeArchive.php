<?php
	$viewStudent=$objAdmin->viewStudent();
if(isset($_POST['searchStudentFee'])){
	$roll=$_POST['roll'];
	$result=$objAdmin->viewFeeArchive($roll);
	$viewStudentRollResult=$objAdmin->viewStudentRoll($roll);
}elseif(isset($_GET['roll'])){
	$roll=$_GET['roll'];
	$result=$objAdmin->viewFeeArchive($roll);
	$viewStudentRollResult=$objAdmin->viewStudentRoll($roll);
}
?>

			<hr>
				<div class="row"> 
					<div class="span8">
						<?php
						
						if(isset($_POST['searchStudentFee'])||isset($_GET['roll'])){
							if($viewStudentRollRow=mysqli_fetch_assoc($viewStudentRollResult)){
								?>							
								<div class="row-fluid">	
									<div class="box span10">
										<div class="box-header">
											<h2></span>Student info</h2>
										</div>
										<div class="box-content">
											<table class="table table-bordered table-striped">
												<tr>
													<td colspan='2'>
													</td>
												</tr>
												<tr>
													<td>Name</td>
													<td>
														<?php echo $viewStudentRollRow['student_name'];?>
													</td>
												</tr>
												<tr>
													<td>Roll</td>
													<td>
														<?php echo $viewStudentRollRow['student_roll'];?>
													</td>
												</tr>
												<tr>
													<td>Depertment</td>
													<td>
														<?php echo $viewStudentRollRow['student_technology'];?>
													</td>
												</tr>
											</table>
										</div>	
									</div><!--/span-->
									
								</div><!--/row-->
								<?php
							}
						}
						?>
							
					</div>
					<div class="span2">						
						<form action="" method='post'>
						  <div class="control-group">
							<!-- <label class="control-label" for="selectError">Roll</label> -->
							<div class="controls">							
								  <div class="input-append">
									<abbr title='click here for search' style='border:none;'>
									  <select id="appendedInputButton" size="16" data-placeholder="search roll here"  name="roll" id="selectError" data-rel="chosen" required >
														<option value=""></option>
										<?php
											while($viewStudentRow=mysqli_fetch_assoc($viewStudent)){
												?>
												
										<option value="<?php echo $viewStudentRow['student_roll'];?>"><?php echo $viewStudentRow['student_roll'];?></option>
												<?php
											}
										?>
									  </select>	
									</abbr>						
									<button class="btn btn-xm btn-info"  type='submit' name='searchStudentFee'>Go</button>
								  </div>
							</div>
						  </div>
						</form>
					</div>
				</div>
			
			<hr>
	<div class="row-fluid">
					<div class="box-content"  style="overflow:scroll;" >
						<style type="text/css">
							form.action{
								float:left;
								margin:2px;
							}
						</style>
						<table class="table table-striped table-hover table-bordered bootstrap-datatable datatable" style='width:80%;'>
						  <thead>
							  <tr>
								  <th>Date</th>
								  <th>Total</th>
								  <th>Comment</th>
								  <th>Admition Fee</th>
								  <th>Course Fee</th>
								  <th>Registration Fee</th>
								  <th>Certificate Fee</th>
								  <th>Exam Fee</th>
								  <th>Late Fee</th>
								  <th>Book Fee</th>
								  <th>ID Card Fee</th>
								  <th>Library Fee</th>
								  <th>T.C. Fee</th>
								  <th>IBIT Hostel</th>
								  <th>Money Receipt Fee</th>
								  <th>Others</th>
								<?php
									if(($_SESSION['fcs_user_level']==1)||($_SESSION['fcs_user_level']==2)){
								?>
								  <th>Actions</th>
								<?php
									}
								?>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							
								if(isset($_POST['searchStudentFee'])||isset($_GET['roll'])){
									while($row=mysqli_fetch_assoc($result)){
										?>
										<tr>
									<td><?php echo $row['date'];?></td>
									<td><?php echo $row['totalFee'];?></td>
									<td><?php echo $row['feeComment'];?></td>
									<td><?php echo $row['admitionFee'];?></td>
									<td><?php echo $row['CourseFee'];?></td>
									<td><?php echo $row['registrationFee'];?></td>
									<td><?php echo $row['certificateFee'];?></td>
									<td><?php echo $row['examinationFee'];?></td>
									<td><?php echo $row['lateFee'];?></td>
									<td><?php echo $row['booksFee'];?></td>
									<td><?php echo $row['idCardFee'];?></td>
									<td><?php echo $row['libraryCardFee'];?></td>
									<td><?php echo $row['tcFee'];?></td>
									<td><?php echo $row['ibitHostel'];?></td>
									<td><?php echo $row['moneyReceiptFee'];?></td>
									<td><?php echo $row['others'];?></td>
									<?php
									 //view action only user level 1 and 2
										if(($_SESSION['fcs_user_level']==1)||($_SESSION['fcs_user_level']==2)){
									?>
											<td class="center">
												<form action="editFee.php" method='post' class='action'>
													<button class="btn btn-success" type='submit' name='restoreFeeId' value="<?php echo $row['id'];?>" title='restore'>
														<i class="halflings-icon white repeat"></i>  
													</button>
												</form>
												<?php
												//view delete only user level 1 
													if(($_SESSION['fcs_user_level']==1)){
												?>
													<form action="" method='post' class='action'>
														<button onclick="return confirm('Are you want to delete it permanently!')" class="btn btn-danger" type='submit' name='deleteFeeidPermanently' value="<?php echo $row['id'];?>"  title='delete'>
															<i class="halflings-icon white trash"></i> 
														</button>
														<input name='roll' type="text" class='hidden' style='width:0; height:0;' value="<?php echo $row['stdntRoll'] ?>"/>
													</form>
												<?php
													}
												?>
											</td>
									<?php
										}
									?>
								</tr>
										<?php
									}
								}
							?>
						  </tbody>
					  </table>            
					</div>
			
			</div><!--/row-->