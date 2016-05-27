<?php
	session_start();
	$connect = @mysql_connect('localhost', 'root', 'song');
	$db_con = mysql_select_db("today", $connect);

	if($connect){
  		echo "<script>alert('데이터베이스에 접속했습니다..');</script>";
	}

	$userid = 'id';
	$userpw = 'password';

	$result = mysql_query("select id, password from user where id = $userid, password = $userpw");
	$output = mysql_fetch_assoc($result);

	if(empty($_GET['username'])==true)
	{
		echo "<script>alert('아이디가 입력되지 않았습니다.');</script>";
	}
	if(empty($_GET['password'])==true)
	{
		echo "<script>alert('비밀번호가 입력되지 않았습니다.');</script>";
	}

	


 ?>
