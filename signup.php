<?php
    include('./mysql.php');

    $userId = $_POST['userId'];
	$userPw = $_POST['userPw'];
    $userNick = $_POST['nickName'];

    if($userId == "" && $userPw == "" && $userNick ==""){
        echo "<script> alert('error'); history.go(-1); </script>";
    } else {
        $query = "INSERT INTO users (id, passwd, nickName) VALUES ('$userId', '$userPw', '$userNick')";
		$result = mysqli_query($connect, $query);
		if($result === false){
            // echo mysqli_error($connect);
            echo "<script> alert('error'); history.go(-1); </script>";
        } else {
            echo "<script> alert('회원가입 성공!'); location.href='../index.html';</script>";
        }
    }
?>
