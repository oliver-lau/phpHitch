<?php 
	header('Content-Type: application/json');
	$conn = mysqli_connect("127.0.0.1","root","") or die("数据库连接错误".mysqli_error());
	mysqli_select_db($conn,"test") or die("数据库访问错误".mysqli_error());
	mysqli_query($conn,"set names utf-8");
?>