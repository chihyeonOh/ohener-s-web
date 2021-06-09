<html>
<head>
<script language="javascript">
function validate()
{
	var newpassword = document.forms['myform']['newPassword'].value;
	var confirmpassword = document.forms['myform']['confirmPassword'].value;
	if( newpassword != confirmpassword )
   {
	alert("Both passwords are not matching. Give the same value in both");
    document.forms['myform']['newPassword'].focus();
    return false;
   }
	else
	{
		return true;
	}
}
</script>
</head>
<body>
<h1>Set Your Password</h1><br><br>

<form name="myform" method="post" action="changepassword1.php"  onSubmit="return validate()">

<label>Username:</label> 
<input type="username" id="username" name="username" value='<?php echo $_GET['username']; ?>'/><br><br>

<label>New Password:</label> 
<input type="password" id="newPassword" name="newPassword" title="New password" required/><br><br>

<label>Confirm Password:</label> 
<input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" required/><br><br>

<p class="form-actions">
<input type="submit" value="Change Password" title="Change password" />
</p>

</form>
</body>
</html>