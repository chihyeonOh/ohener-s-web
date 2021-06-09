<html>
<head></head>
<body>
<?php 
$username=$_POST['fullname'];
$emailid=$_POST['emailid'];
$dob=$_POST['dob'];
$mobileno=$_POST['mobileno'];
$password=$_POST['password'];

$conn=mysql_connect("localhost","root","");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysql_select_db("db1");
$result = mysql_query("select * from userdetails where username='$username'");
$row = mysql_fetch_array($result);
if (($row['username']) == $username)
{
	die("User name already exist, please change the name");
}
$result = mysql_query("Insert into userdetails VALUES ('$username', '$password', '$emailid', '$dob', '$mobileno')")
or die("Failed to insert into database".mysql_error());
if(!$result)
{
	echo("Signed up unsuccessful. Please try again");
}
else{
	echo("Sugned up Succussfully. Please login to your account by going");
}
?>
<a href="http://localhost:80/website2/index.html"> here </a>
</body>
</html>