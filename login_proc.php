<?php
	session_start();
	$connect = @mysql_connect('localhost', 'root', 'song');
	$db_con = mysql_select_db("today", $connect);

	$userid = $_GET['username'];
	$userpw = $_GET['password'];

	if($connect){
  		echo "<script>alert('데이터베이스에 접속했습니다.');</script>";
	}
	if(empty($userid==true)
	{
		echo "<script>alert('아이디가 입력되지 않았습니다.');</script>";
	}
	if(empty($userpw)==true)
	{
		echo "<script>alert('비밀번호가 입력되지 않았습니다.');</script>";
	}

	$sql = "select * from from user where id='$userid' and password='$userpw'";
	$result = mysql_query($sql);

	$count = mysql_num_rows($result);
	if($count==1){
		session_register("userid");
		header("location: main.php");
	}
	else
	{
		echo "<script>alert('아이디/패스워드가 일치하지 않습니다.');</script>";
	}


 ?>
