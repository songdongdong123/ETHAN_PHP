<?php
	// 时间戳
	header("Content-Type: text/html; charset=utf-8");
	// time()函数用来获取当前点的时间戳
	// date()的第二个参数就是时间戳
	// 可以通过时间戳得到几天前的时间或者几天后的时间
	echo time(); // 当前时间戳
	echo "<hr/>";
	echo date('Y-m-d H:i:s');
	echo "<hr/>";
	echo date('Y-m-d H:i:s', time());
	echo "<hr/>";
	echo "一天之后的时间为：",date('Y-m-d H:i:s', time()+24*3600);
	echo "<hr/>";
	echo "一周之后的时间为：",date('Y-m-d H:i:s', time()+7*24*3600);
	echo "<hr/>";
	echo "14天之前的时间为：",date('Y-m-d H:i:s', time()-14*24*3600);

	// 根据日期获取日期对应的时间戳
	// 参数顺序(小时，分钟，秒，月，日，年)所有参数都是可选的，不填的话，默认使用当前时间的年月日时分秒
	// 通过mktime(h,i,s,n,j,y):得到指定日期的时间戳
	// 2018-4-8 10:30:15
	echo "<hr/>";
	echo mktime(10,30,15,4,8,2018);
	echo "<hr/>";
	echo date('Y-m-d H:i:s', mktime(10,30,15,4,8,2018)); // 2018-04-08 10:30:15

	// 计算两个日期的时间差（通过时间戳）
	$birth = mktime(0,0,0,8,13,1990);
	$time = time();
	$age = floor(($time-$birth)/(24*3600*365));
	echo "<hr/>";
	echo '今年',$age,'岁';
?>