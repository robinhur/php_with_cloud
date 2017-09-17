<!DOCTYPE html>
<meta charset="utf-8" />

<?php
	
	$link = mysqli_connect("localhost", "root", "root", "db");
	
	if (!$link) {
		echo "MySQL 접속 에러 : ";
		echo mysqli_connect_error();
		exit();
	}
	
	echo "MySQL 접속 완료";
	mysqli_set_charset($link,"utf8");
	
	
	$sql_query = "select * from Person";
	
	$raw_result = mysqli_query($link, $sql_query);
	echo $raw_result;
	echo "<br>";
	
	$result_array = array();
	if ($raw_result) {
		
		while($row = mysqli_fetch_array($raw_result)) {
			array_push($result_array, 
						array(
								'id'=>$row[0],
								'name'=>$row[1],
								'address'=>$row[2]
						)
			);
		}
		
		echo $result_array;
		echo "<br>";
		
		echo print_r($result_array);
		
	}
	
	
	
	
	mysqli_close($link);
	
?>