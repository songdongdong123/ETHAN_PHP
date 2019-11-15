<?php
	header("Content-Type: text/html; charset=utf-8");
	$arr = array('司马懿','杨修', '鲁肃');
	for ($i=0; $i <3; $i++) { 
		echo "<br>数组第".$i."的值：".$arr[$i];
	}

	$arr1 = array('谋士1' => '诸葛亮', '谋士2' => '郭嘉', '谋士3' => '荀彧');
	foreach ($arr1 as $key => $value) {
		echo "<hr>".$key."是:".$value;
	}

?>