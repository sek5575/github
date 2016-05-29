<?php
	$connect = @mysql_connect('localhost', 'root', 'song');
	$db_con = mysql_select_db("today", $connect);

	$id=$_GET['id'];
	$password=$_GET['pwd'];

	$sql = "insert into user (id, password) values ('$id', '$password')";
	if(isset($id) && isset($password){
		mysql_query($sql)
		echo "<script>alert('입력되었습니다.');</script>";
	}
	else{
		echo "<script>alert('오류!');</script>";
	}
?>