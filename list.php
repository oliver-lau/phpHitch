<?php
include "conn.test.php";

$query = mysqli_query($conn,"select * from activity limit 100");
$result = mysqli_fetch_array($query);
die(json_encode(array("info"=>$result,"code"=>200)));