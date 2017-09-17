<!DOCTYPE html>
<meta charset="utf-8" />

<?php
	
	$link = mysqli_connect("localhost", "root", "root", "db");
	
	if (!$link) {
		echo "MySQL connection error : ";
		echo mysqli_connect_error();
		exit();
	}
	
	mysqli_set_charset($link,"utf8");


	$sql_query = "select * from Person";
	
	$raw_result = mysqli_query($link, $sql_query);
	
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

		
		echo print_r($result_array);
		
	} else {
		echo "SQL query run error";
		echo mysqli_error($link);
	}
	
	
	
	
	mysqli_close($link);
	
?>