	<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<h2>Edit your account</h2>
					<form class="form-horizontal" action="" method="post"  enctype='multipart/form-data' oninput="if(rePassword.value.trim().length>1){if(rePassword.value.trim().length==password.value.trim().length){if(password.value.trim()==rePassword.value.trim()){ o.value='Password and re-Password matched'}else{o.value='Password and re-Password not matched'}}else if(rePassword.value.trim().length>password.value.trim().length){o.value='Password and re-Password not matched'}}">
						<fieldset>
							
							<div class="input-prepend" title="file">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="file" id="file" type="file" accept='.jpg,.jpeg,.png,.gif' placeholder="add file"  />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="name">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="name" value="<?php echo $row['user_name'];?>" id="name" type="text" placeholder="type name" required />
							</div>
							<div class="clearfix"></div>


							<div class="input-prepend" title="email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
                                                                <input class="input-large span10" name="email" value="<?php echo $row['user_email'];?>" id="email" type="email" placeholder="type email" required />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" value="<?php echo $row['user_password'];?>" id="password" type="password" placeholder="type password" required/>
							</div>
							<div class="clearfix"></div>
							
							<div class="input-prepend" title="rePassword">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="rePassword" value="<?php echo $row['user_password'];?>" id="rePassword" type="password" placeholder="type re-Password" required/>
							</div>
							<div class="clearfix"></div>
							<center> 
								<label for="o"><output id="o"></output></label>							
							</center>
							<div class="button-login">	
								<button type="submit" name="UpdateLoggedUser" value="<?php echo $row['user_id'];?>"  class="btn btn-primary">Update</button>
							</div>
							<div class="clearfix"></div>
					</form>
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	