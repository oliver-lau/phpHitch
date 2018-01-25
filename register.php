<?php
include "conn.test.php";

$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

$check_query = mysqli_query($conn,"INSERT INTO `user` (`username`, `password`) VALUES ('$username','$password')");

if(mysqli_affected_rows($conn) > 0){
	die(json_encode(array("info"=>"注册成功","code"=>200)));
} else {
	die(json_encode(array("info"=>"注册失败","code"=>401)));
}
?>