<html>
<head></head>
<body>
<?php 
$username=$_POST['username'];
$password=$_POST['newPassword'];
$conn=mysql_connect("localhost","root","");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysql_select_db("db1");
$result = mysql_query("Update userdetails set password='$password' where username='$username'")
or die("Failed to query database".mysql_error());
if(!$result)
{
	echo("Password is not resetted. Please try again");
}
else{
	echo("Password reset successfully");
}
?>
