<?php
	header('content-type:text/html;charset:utf-8');
	// strtotime()用来解析英文时间
	echo time();
	echo "<hr/>";
	echo strtotime('now');
	echo "<hr/>";
	// 之前我们得到一天之前的时间，需要自己计算
	echo date('Y-m-d H:i:s', time()+24*3600);
	// 使用strtotime()得到我们想要日期的时间戳
	echo "<hr/>";
	// 可以加天
	echo date('Y-m-d H:i:s', strtotime('+1 day')); // 表示一天后的时间戳
	echo "<hr/>";
	echo date('Y-m-d H:i:s', strtotime('+2 days')); // 表示两天后的时间戳
	echo "<hr/>";
	echo date('Y-m-d H:i:s', strtotime('-1 day')); // 表示一天后的时间戳

	// 也可以加月加年
	echo "<hr/>";
	echo date('Y-m-d H:i:s', strtotime('+1 month')); // 表示一个月后的时间戳
	echo "<hr/>";
	echo date('Y-m-d H:i:s', strtotime('+2 months')); // 表示两个月后的时间戳
	echo "<hr/>";
	echo date('Y-m-d H:i:s', strtotime('+2 years 3 months 12 days')); // 表示两年三个月12天后的时间戳
?>