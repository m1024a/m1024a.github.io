<?php

$servername = "127.0.0.1";
$username="szmt";
$password = "szmt";
$dbname = "szmt";


$id = 1024;
$dui = $_POST["dui"];
$cuo = $_POST["cuo"];

$conn = new MySQLi($servername,$username,$password,$dbname);
if(!$conn ->connect_error)
{
	$sql = "SELECT * FROM `chengji` WHERE `uid` = '$id'";
	$result = $conn->query($sql);
	
	if($result->num_rows>0)
	{
		$sql = "update `chengji` set `dui`=$dui,`cuo`=$cuo  where `uid` = '$id'";
		$result = $conn->query($sql);
	}else{
		echo "找不到你的信息";
	}
}else{
	echo "数据库有错误";
}

