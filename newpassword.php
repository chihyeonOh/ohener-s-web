<html>
<head></head>
<body>
<?php 
$username=$_POST['username'];
$mobileno=$_POST['mobileno'];

$conn=mysql_connect("localhost","root","");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysql_select_db("db1");
$result = mysql_query("select * from userdetails where username='$username' and mobileno='$mobileno'")
or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if (($row['username']) == $username  && $row['mobileno'] ==$mobileno)
{
	echo "Your current password is: ".$row['password'];
}
else
{
	die("Incorrect details. Please give correct details");
} 
?>
<br>
If you want to change current password. Click on change password
<form name="myform" method="get" action="http://localhost:80/website2/changepassword.php"> 
<br><br>
<label>Username:</label> 
<input type="username" id="username" name="username" value='<?php echo $_POST['username'];?>'/><br><br>
<p class="form-actions">
<input type="submit" value="Change password" title="Change password" />
</p>
</form>
</body>
</html>

