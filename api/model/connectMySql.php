<?php
	/**
	 * 连接数据库
	 */
	class connectMysql
	{
		
		function __construct($host, $username, $password, $dbname)
		{
			$connect = mysqli_connect($host, $username, $password, $dbname);
			if (!$connect) {
				die("连接失败: " . mysqli_connect_errno());
			}
			mysqli_query($connect, "set names 'utf8'");
			return $connect;
		}
	}
?>