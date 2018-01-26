<?php 
	header('Content-Type: application/json');
	$conn = mysqli_connect("地址","用户名","密码") or die("数据库连接错误".mysqli_error());
	mysqli_select_db($conn,"数据库名称") or die("数据库访问错误".mysqli_error());
	mysqli_query($conn,"set names utf-8");
?>