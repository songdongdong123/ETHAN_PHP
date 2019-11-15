<?php
	header("Content-Type: text/html; charset=utf-8");
	$arr = array();
	$arr[0] = '呵呵哒';
	$arr[1] = 'mmp';
	print_r($arr);
	echo '<hr/>';
	$arr1 = array('0' => '刘备', '1' => '关羽', '2' => '赵云');
	print_r($arr1);
	echo '<hr/>';

	$arr2 = array('诸葛亮','郭嘉', '荀彧');
	print_r($arr2);
?>