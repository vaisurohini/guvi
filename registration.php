<form name="frmRegistration" method="post" action="">
	<table border="0" width="500" align="center" class="demo-table">
		<?php if(!empty($success_message)) { ?>	
		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
		<?php } ?>
		<?php if(!empty($error_message)) { ?>	
		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
		<?php } ?>
		<tr>
			<td>User Name</td>
			<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" class="demoInputBox" name="password" value=""></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" class="dem.
oInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
			<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
			</td>
		</tr>
		<tr>
			<td colspan=2>
			<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
		</tr>
	</table>
</form>
