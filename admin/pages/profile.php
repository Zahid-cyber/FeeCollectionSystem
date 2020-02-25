<center>
	<?php
		$result=$objAdmin->viewUserWithId($_SESSION['fcs_user_id']);
		$row=mysqli_fetch_assoc($result);
		if(isset($row['user_image'])){
			?>
			<img src="../<?php echo $row['user_image'];?>" style=" width:100px; border:3px solid tomato; "; alt="" />
			<?php
		}
	?>
	<table class="table table-striped" style='width:500px;'>
		<tr>
			<td width='100px'>Name</td>
			<td><?php echo $row['user_name'];?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $row['user_email'];?></td>
		</tr>
		<tr>
			<td>Level</td>
			<td><?php echo $row['user_level'];?></td>
		</tr>
		<tr>
			<td colspan='2'>
				<center>
					<form action="editProfile.php" method='post'>
						<button onclick="myFunction()" id='editProfile' type='submit' name='editProfile' value='' class='btn btn-info'>edit</button>
					</form>
				</center>
			</td>
		</tr>
	</table>
</center>

<script>
function myFunction() {
    var person = prompt("Please enter your password:", "");
    editProfile.value = person;
}
</script>