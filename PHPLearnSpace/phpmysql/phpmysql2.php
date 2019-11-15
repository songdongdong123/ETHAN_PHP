<?php
	header("Content-type:text/html;charset=utf8");
	class Account {
		public	$servername = "sdm372453150.my3w.com";
		public	$username = "sdm372453150";
		public	$password = "15118093883dong";
		public	$dbname = "sdm372453150_db";
		public function insertUser () {
			// 1.连接数据库
			$link = mysqli_connect($this->servername, $this->username,$this->password, $this->dbname);
			if (!$link) {
				var_dump($link);
				die('连接失败'.mysqli_connect_error());
			}
			// 2.设置当前连接使用的编码方式
			mysqli_query($link, "set names 'utf8'");
			// 3.插入数据库的mysql语句
			$sql = "INSERT INTO user_list4 set user_name='".$_REQUEST["name"]."', pass_word='".$_REQUEST["pass"]."'";
			// 4.mysqli_query()执行一条sql语句;执行成功时返回true反之返回false
			$result = mysqli_query($link, $sql);
			// 5.关闭数据库连接
			mysqli_close($link);
			$ret = array("retCode" => 0, "errCode" => 0, "data" => array());
			echo json_encode($ret, JSON_UNESCAPED_UNICODE);
		}
	}
// $_REQUEST['参数名']可以用来获取任意形式的参数（post,get）
// 这里我们可以使用参数传递的方式来创建对象，并调对象的方法
	$model = $_REQUEST['m'];
	$func = $_REQUEST['c'];
	$obj = new $model();
	$obj->$func();
?>