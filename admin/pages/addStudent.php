<?php
	if(isset($_POST['editStudentId'])){
		$studentEditRestult=$objAdmin->viewStudentWithId($_POST['editStudentId']);
		$studentEditRow=mysqli_fetch_assoc($studentEditRestult);
	}
?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2>
						<?php if(isset($_POST['editStudentId'])){ echo 'Edit Student Form'; }else{ echo 'Add Student Form';} ?>
						</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method='post' enctype='multipart/form-data'>
						
							<fieldset>
							
							  <div class="control-group">
								<label class="control-label">Image Upload</label>
								<div class="controls">
								  <input name='file' type="file" accept='.jpg,.jpeg,.png'>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="name">Name</label>
								<div class="controls">
								  <input name='name' class="input-xlarge focused" id="name" type="text" value="<?php if(isset($_POST['editStudentId'])){ echo $studentEditRow['student_name']; } ?>" required > 
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="fname">Father's Name</label>
								<div class="controls">
								  <input name='fname' class="input-xlarge focused" id="fname" type="text" value="<?php if(isset($_POST['editStudentId'])){ echo $studentEditRow['fathersName']; } ?>" >
								</div>
							  </div>     
								<div class="control-group">
								  <label class="control-label" for="Address">Address</label>
								  <div class="controls">
									<textarea name='Address' class="span4" id="Address" rows="2" maxlength="200" size="40"><?php if(isset($_POST['editStudentId'])){ echo $studentEditRow['Address']; } ?></textarea>
								  </div>
								</div>
							  <div class="control-group">
								<label class="control-label" for="Phone">Phone Number</label>
								<div class="controls">
								  <input name='PhoneNumber' class="input-xlarge focused" id="Phone" type="text" size="14"  value="<?php if(isset($_POST['editStudentId'])){ echo $studentEditRow['PhoneNumber']; } ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="Roll">Roll</label>
								<div class="controls">
								  <input name='roll' class="input-xlarge focused" id="Roll" type="text" required  value="<?php if(isset($_POST['editStudentId'])){ echo $studentEditRow['student_roll']; } ?>">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError">Technology</label>
								<div class="controls">
								  <select name="technology" id="selectError" data-rel="chosen" >
								   <?php if(isset($_POST['editStudentId'])){ 
										?>
										<option value="<?php echo $studentEditRow['student_technology'];?>" selected><?php echo $studentEditRow['student_technology'];?></option>										
										<?php
								   } ?>
									<option value="Computer">Computer</option>
									<option value="Electrical">Electrical</option>
									
									<option value="Civil">Civil</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" name="<?php if(isset($_POST['editStudentId'])){ echo 'updateStudent'; }else{ echo'saveStudent';} ?>" value="<?php if(isset($_POST['editStudentId'])){ echo 'updateStudent'; }else{ echo'saveStudent';} ?>" class="btn btn-primary">
									 <?php 
										if(isset($_POST['editStudentId'])){ echo 'Update' ;}else{ echo 'Save';}
									?>
								</button>
								<button class="btn">Cancel</button>
							  <?php 
								if(isset($_POST['editStudentId'])){
								  ?>							  
								<input name='editStudentId' type="text" class='hidden' style='width:0; height:0;' value="<?php echo $_POST['editStudentId']; ?>"/>
							  <?php
								}
							  ?>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->