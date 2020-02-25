<?php
	$userResult=$objAdmin->viewUserWithId($_POST['editUserId']);
?>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2></span>User</h2>
		</div>
		<div class="box-content">
			<style type="text/css">
				form.action{
					float:left;
					margin:2px;
				}
			</style>
			<table class="table table-striped table-bordered ">
			  <thead>
				  <tr>
					  <th>Image</th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>level</th>
				  </tr>
			  </thead>   
			  <tbody>
				<?php
					while($row=mysqli_fetch_assoc($userResult)){
						?>
						<tr>
							<td><?php if(isset( $row['user_image'])){?>
								<img width='50px' src="../<?php echo $row['user_image'];?>" alt="" /><?php } ?>
							</td>
							<td><?php echo $row['user_name'];?></td>
							<td><?php echo $row['user_email'];?></td>
							<td><input form="submitUser" type="number" name='level' value="<?php echo $row['user_level'];?>" min='1' max='3' /></td>
							
						</tr>
						<tr>
							<td colspan='12'>
								<center>
									<form id='submitUser' action="manageUser.php" method='post'>
										<button  type="submit" name='submitEditUser' value="<?php echo $_POST['editUserId'];?>" class="btn btn-info" >Save</button>
									</form>
								</center>
							</td>
						</tr>
						<?php
					}
				?>
								
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->