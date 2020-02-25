<?php

	$viewStudent=$objAdmin->viewStudent();
	
	if(isset($_POST['editFeeId'])){
		//print_r($_POST['editFeeId']);
		$feeId=$_POST['editFeeId'];
		$feeIdResult=$objAdmin->vFeeWithId($feeId);
		$feeIdRow=mysqli_fetch_assoc($feeIdResult);
	}
?>	
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<?php
							if(isset($_POST['editFeeId'])){
								?>								
								<h2>Edit Fee Form</h2>
								<?php
							}else{
								?>								
								<h2>Add Fee Form</h2>
								<?php
							}
						?>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method='POST' action="" oninput="total.value=parseInt(a.value)+parseInt(b.value)+parseInt(c.value)+parseInt(cc.value)+parseInt(ccc.value)+parseInt(cccc.value)+parseInt(d.value)+parseInt(e.value)+parseInt(f.value)+parseInt(g.value)+parseInt(h.value)+parseInt(i.value)+parseInt(j.value)" >
						  <fieldset>
							  <div class="control-group">
								<label class="control-label" for="selectError">Roll</label>
								<div class="controls">
								  <select data-placeholder="input roll here"  name="roll" id="selectError" data-rel="chosen" required >
									<option value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['stdntRoll'];}?>" <?php if(isset($_POST['editFeeId'])){echo 'selected';}?>><?php if(isset($_POST['editFeeId'])){echo $feeIdRow['stdntRoll'];}?></option>
									<?php
										while($viewStudentRow=mysqli_fetch_assoc($viewStudent)){
											?>
											
									<option value="<?php echo $viewStudentRow['student_roll'];?>"><?php echo $viewStudentRow['student_roll'];?></option>
											<?php
										}
									?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date</label>
							  <div class="controls">
								<input name='date' type="text" class="input-xlarge" id="date01" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['date'];}else{ echo date('y/m/d');} ?>" readonly>
							  </div>
							</div>        
							<div class="control-group">
							  <label class="control-label" for="textarea2">comment</label>
							  <div class="controls">
								<textarea name='comment' class="" id="textarea2" rows="2" maxlength="74" ><?php if(isset($_POST['editFeeId'])){echo $feeIdRow['feeComment'];}?></textarea>
							  </div>
							</div>
							<table class="table table-striped table-hover table-bordered">
								<thead>
									<th>si.no.</th>
									<th>Descripton</th>
									<th>Amount</th>
								</thead>
								<tbody>
									<?php $addfeeSiNo=0;?>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Admition Fee</td>
										<td style='' class='span3'><input id='a' name='Admition' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['admitionFee'];}else{echo '0';}?>" min='0' maxlength="7" /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Course Fee</td>
										<td style='' class='span3'><input id='b' name='Course' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['CourseFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Registration Fee</td>
										<td style='' class='span3'><input id='c' name='Registration' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['registrationFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Certificate Fee</td>
										<td style='' class='span3'><input id='cc' name='Certificate' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['certificateFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Board/Examination Fee</td>
										<td style='' class='span3'><input id='ccc' name='Examination' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['examinationFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Late Fee</td>
										<td style='' class='span3'><input id='cccc' name='Late' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['lateFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Book Fee</td>
										<td style='' class='span3'><input id='d' name='Book' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['booksFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>ID Card Fee</td>
										<td style='' class='span3'><input id='e' name='IDCard' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['idCardFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Library Fee</td>
										<td style='' class='span3'><input id='f' name='Library' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['libraryCardFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>T.C. Fee</td>
										<td style='' class='span3'><input id='g' name='tc' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['tcFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>IBIT Hostel</td>
										<td style='' class='span3'><input id='h' name='Hostel' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['ibitHostel'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Money Receipt Fee</td>
										<td style='' class='span3'><input id='i' name='Receipt' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['moneyReceiptFee'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php echo ++$addfeeSiNo;?></td>
										<td>Others</td>
										<td style='' class='span3'><input id='j' name='others' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['others'];}else{echo '0';}?>" min='0' maxlength="7"  /></td>
									</tr>
									<tr>
										<td class='span1'><?php //echo ++$addfeeSiNo;?></td>
										<td class=''><strong class="text-right">Total</strong></td>
										<td style='' class='span3'><input name='total' id='total' type="number" class="btn-default span12" value="<?php if(isset($_POST['editFeeId'])){echo $feeIdRow['totalFee'];}else{echo '0';}?>" min='1' maxlength="7"  readonly /> </td>
									</tr>
								</tbody>
							</table>
							<div class="form-actions">
                                                            <input name="<?php if(isset($_POST['editFeeId'])){echo 'updateFee';}else{echo 'submitFee';}?>" onclick="return feeSubmitconfirm(parseInt(roll.value),parseInt(total.value))" type="submit" class="btn btn-primary" value="<?php if(isset($_POST['editFeeId'])){echo 'Update';}else{echo 'Save';}?>"/>
							  <button type="reset" class="btn">Cancel</button>
							  <?php 
								if(isset($_POST['editFeeId'])){
								  ?>							  
								<input name='editFeeId' type="text" class='hidden' style='width:0; height:0;' value="<?php echo $_POST['editFeeId']; ?>"/>
							  <?php
								}
							  ?>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->