<?php
	$connect = @mysql_connect('localhost', 'root', 'song');
	$db_con = mysql_select_db("today", $connect);

	$id=$_GET['id'];
	$password=$_GET['pwd'];

	$sql = "insert into user (id, password) values ('$id', '$password')";


	$check = "select * from user where id='$id'";
    $result = mysql_query($check);
    $row = mysql_fetch_row($result);

	if(strcmp($id, $row[0]) == 0){
		echo "<script>alert('동일한 아이디가 존재합니다.');</script>";
	}
	else{
		if((isset($id) && isset($password))){
			mysql_query($sql);
			echo "<script>alert('입력되었습니다.');window.location.replace('login.php');</script>";
		}
		else{
			echo "<script>alert('오류!');</script>";
		}
	}
?>