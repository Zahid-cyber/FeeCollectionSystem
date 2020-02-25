<?php
	$userResult=$objAdmin->viewAllUserArchive();
?>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2></span>Users</h2>
		</div>
		<div class="box-content">
			<style type="text/css">
				form{
					float:left;
					margin:2px;
				}
			</style>
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Image</th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>level</th>
					  <th>Status</th>
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
					while($row=mysqli_fetch_assoc($userResult)){
						?>
						<tr>
							<td><?php if(isset( $row['user_image'])){?>
								<a href="../<?php echo $row['user_image'];?>">
									<img width='50px' src="../<?php echo $row['user_image'];?>" alt="" /><?php } ?>
								</a>
							</td>
							<td><?php echo $row['user_name'];?></td>
							<td><?php echo $row['user_email'];?></td>
							<td><?php echo $row['user_level'];?></td>
							<td class="center">
								<?php
									if ($row['activation_status'] == 1) {
										?>
										<span class="label label-success">Active</span>																					
										<?php
									} else {
										?>

										<span class="label label-warning">Deactive</span>
										<?php
									}
								?>
							</td>
							<?php
							 //view action only user level 1 and 2
								if(($_SESSION['fcs_user_level']==1)||($_SESSION['fcs_user_level']==2)){
							?>
								<td class="center">
									<?php
									//view delete only user level 1 
										if(($_SESSION['fcs_user_level']==1)){
									?>
									   <form action="" method='post'>
											<button class="btn btn-success" type='submit' name='RestoreUserId' value="<?php echo $row['user_id'];?>" title='restore'>
												<i class="halflings-icon white repeat"></i>  
											</button>
										</form>
										<form action="" method='post'>
											<button onclick="return confirm('Are you want to delete it permanently!')" class="btn btn-danger" type='submit' name='deleteUserIdPermanently' value="<?php echo $row['user_id'];?>"  title='delete'>
												<i class="halflings-icon white trash"></i> 
											</button>
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
				?>
								
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->