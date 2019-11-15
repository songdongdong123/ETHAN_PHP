<?php
	header('content-type:text/html;charset:utf-8');
	// microtime()用来获取微秒，返回当前时间戳和微秒数
	echo microtime(),'<br>'; // 一个微秒数和当前时间戳
	echo time(), '<br/>';
	echo microtime(true), '<br/>'; // 返回一个保留四位小数的浮点型时间戳

	// getdate()返回一个关于当前日期信息的数组
	// gettimeofday()
	// checkdate() 验证日期是否合法
	// 2018-04-07合法
	// 2018-18-35非法
?>