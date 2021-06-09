<?php
	include('./mysql.php');

	$userId = $_POST['userId'];
	$userPw = $_POST['userPw'];

	if(!($userId == '')){
		$query = "SELECT * FROM users WHERE id='$userId' AND passwd='$userPw'";
		$result = mysqli_query($connect, $query);
		$row = mysqli_fetch_array($result); 

		if($row['id'] == $userId && $row['passwd'] == $userPw){
			header("Location:../sub_html/myweb.php");
		} else {
			echo "<script> alert('login error'); history.go(-1); </script>";
		}
	} else {
		echo "<script> alert('login error'); history.go(-1); </script>";
	}

?>
