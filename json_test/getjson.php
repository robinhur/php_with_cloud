<!DOCTYPE html>
<meta charset="utf-8" />

<?php
	
	echo getenv("SERVER_IP");
	$link = mysqli_connect("localhost", "root", "root", "db");
	
	if (!$link) {
		echo "MySQL 접속 에러 : ";
		echo mysqli_connect_error();
		exit();
	}
	
	echo "MySQL 접속 완료";
	mysqli_set_charset($link,"utf8");
	
	
	mysqli_close($link);
	
?>