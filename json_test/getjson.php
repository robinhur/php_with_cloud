<?php
	
	$link = mysqli_connect("localhost", "root", "toor", "db");
	
	if (!$link) {
		echo "MySQL 접속 에러 : ";
		echo mysqli_connect_error();
		exit();
	}
	
	echo "MySQL 접속 완료";
	mysqli_set_charset($link,"utf8");
	
	
	mysqli_close($link);
	
?>