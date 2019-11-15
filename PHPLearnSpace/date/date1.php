<?php
  header("Content-Type: text/html; charset=utf-8");
  // php日期函数
  // Y----年
  // m----月
  // d----日
  // H----时
  // i----分
  // s----秒
  // Y,m,d,H,i,s中间的连接符是可以自定义的（下面是三种自定义方式）
  // 可以根据自己需要取出自己所需的时间
	echo date('Y年m月d日H:i:s');
	echo "<br/>";
	echo date('Y-m-d');
	echo "<br/>";
	echo date('Y:m:d');
	echo "<br/>";
	// 小写y代表2位的年份，n不带前导零的月份，j不带前导零的天数
	echo date('y-n-j');
	echo "<br/>";
	echo date('H:i:s a');
	echo "<br/>";
	echo date('H:i:s A');
	echo "<br/>";
	// w用来获取当前是一周内的第几天，返回值0-6,0代表周日1-6代表周一到周六
	echo date('w');
	echo "<hr/>";
	// 检测是不是闰年0表示不是，1表示是
	echo date('L');
	echo "<hr/>";
	// W代表当前是全年的第几周
	echo date('W');
	echo "<hr/>";
	// z当前代表全年的第几天0-365
	echo date('z');
	echo "<hr/>";
	// t当前月份总共有多少天
	echo date('t');
?>