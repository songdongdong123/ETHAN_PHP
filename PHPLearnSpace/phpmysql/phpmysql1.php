<?php
		header("Content-type:text/html;charset=utf-8");
		// 判断是否支持mysql
		class TestMysql {
			public	$servername = "sdm372453150.my3w.com";
			public	$username = "sdm372453150";
			public	$password = "15118093883dong";
			public	$dbname = "sdm372453150_db";
			public function getUserInfo () {
				// 1.连接数据库并选择一个数据库
				$link = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
				if (!$link) {
					var_dump($link);
					dei('连接失败'.mysqli_connect_error());
				}
				// 2.设置当前连接使用的字符编码
				mysqli_query($link, "set names 'utf8'");
				// 3.选择一个要查询的当前数据库中的一个表
				// (3).在这里我们实现一个分页查询
				$page = 2; // 当前页数
				$pagesize = 2; // 每页显示的数据
				$m = ($page - 1) * $pagesize; // 当前页从第几行开始
				$sql = "SELECT user_name, pass_word, user_id FROM user_list4 LIMIT ".$m.", ".$pagesize."";
				// 4.开始查询mysql_query()接受两个参数
				// 第一个参数：必需。规定要发送的 SQL 查询。注释：查询字符串不应以分号结束。
				// 第二个参数：可选。规定 SQL 连接标识符。如果未规定，则使用上一个打开的连接。
				// 
				// 5.查询
				$result = mysqli_query($link, $sql);//语句返回一个资源标识符，如果查询执行不正确则返回 FALSE。
				// var_dump($result);
				// 6.结果$row = mysqli_fetch_array($result);(每次只能取到一行数据)
				// $row = mysqli_fetch_array($result); //这里其实就是返回我们真正想要拿到的数据（函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有）
				// mysql_fetch_array(data,array_type)
				// 7.处理查询到的数据
				$data = array();
				while($row = mysqli_fetch_array($result)) {
					$tempArr = array();
					// print_r($row);
					$tempArr['user_name'] = $row["user_name"];
					$tempArr['pass_word'] = $row["pass_word"];
					$tempArr['user_id'] = $row["user_id"];
					$data[] = $tempArr;
				}
				// 8.断开数据库连接
				mysqli_close($link);
				$ret = array('retCode' => 0, "errCode" => 0, "data" => $data);
				echo json_encode($ret, JSON_UNESCAPED_UNICODE);
				// var_dump($row);
				// 
			}
		}
		$test = new TestMysql();
		$test->getUserInfo();
?>