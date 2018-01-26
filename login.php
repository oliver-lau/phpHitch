<?php
include "conn.test.php";

$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

$check_query = mysqli_query($conn,"select id from test where username='$username' and password='$password' limit 1");
if($result = mysqli_fetch_array($check_query)){
	die(json_encode(array("info"=>"登陆成功","code"=>200,"userId"=>$result['id'])));
} else {
	die(json_encode(array("info"=>"用户名密码不正确","code"=>401)));
}
?>