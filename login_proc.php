﻿<?php
	$connect = @mysql_connect('localhost', 'root', 'song');
	$db_con = mysql_select_db("today", $connect);

	$userid = $_GET['username'];
	$userpw = $_GET['password'];

	$date = date("Y-m-d");
	$Y = date("Y");
	$M = date("m");

	if(empty($userid))
   {
      echo "<script>alert('아이디가 입력되지 않았습니다.');</script>";
      echo "<script>history.go(-1);</script>";
   }
   else if(empty($userpw))
   {
      echo "<script>alert('비밀번호가 입력되지 않았습니다.');</script>";
      echo "<script>history.go(-1);</script>";
   }
   else {
      $sql = "select * from user where id='$userid' and password='$userpw'";
      $result = mysql_query($sql);

      $row = mysql_fetch_row($result);
      $count = $row[0];

      if(!isset($count)){
         echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
      }
      else{
         session_start();
         $_SESSION['userid'] = $userid;
            echo "<script> alert('로그인 성공!'); window.location.replace('Calendar.php?value=$date&Y=$Y&M=$M');</script>";
      }
  }

 ?>
