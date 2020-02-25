<?php
	$StudentResult=$objAdmin->viewStudentArchive();
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2>Students</h2>
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
								  <th>Roll</th>
								  <th>Father's name</th>
								  <th>Phone number</th>
								  <th>Trade</th>
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
                                                        while($studentRow= mysqli_fetch_assoc($StudentResult)){
                                                            ?>                                                      
                                                      <tr>
                                                              <td> 
                                                                  <?php
                                                                  if (isset($studentRow['student_image'])) {
                                                                      ?>
                                                                      <a href="../<?php echo $studentRow['student_image']; ?>">
                                                                          <img width='100' src="../<?php echo $studentRow['student_image']; ?>" alt="" />
                                                                      </a>
                                                                      <?php
                                                                  }
                                                                  ?>

                                                              </td>
                                                                        <td><?php echo  $studentRow['student_name']; ?></td>
                                                                        <td><?php echo  $studentRow['student_roll']; ?></td>
                                                                        <td><?php echo  $studentRow['fathersName']; ?></td>
                                                                        <td><?php echo  $studentRow['PhoneNumber']; ?></td>
                                                                        <td><?php echo  $studentRow['student_technology']; ?></td>
                                                                        <td class="center">
                                                                            <?php
                                                                            if ($studentRow['activeStatus'] == 1) {
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
																				   <form action="" method='post'>
																						<button class="btn btn-success" type='submit' name='reStoreStudent' value="<?php echo $studentRow['student_id'];?>" title='restore'>
																							<i class="halflings-icon white repeat"></i>  
																						</button>
																					</form>
																					<?php
																					//view delete only user level 1 
																						if(($_SESSION['fcs_user_level']==1)){
																					?>
																						<form action="" method='post'>
																							<button onclick="return confirm('Are you want to delete it permanently!')" class="btn btn-danger" type='submit' name='deleteStudentidPermanently' value="<?php echo $studentRow['student_id'];?>"  title='delete'>
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
