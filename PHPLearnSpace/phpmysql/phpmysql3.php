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
				// 3.从表中删除数据
				// $sql = "UPDATE 表名 SET 要更新的字段名 = '要修改的目标值' WHERE 以该条数据的某个字段作为标识 = 标识的值 LIMIT 限制更改的条数";
				$sql = "UPDATE user_list4 SET user_name = '马里奥' WHERE user_id = 0 LIMIT 1";
				// 4.开始查询mysql_query()接受两个参数
				// 第一个参数：必需。规定要发送的 SQL 查询。注释：查询字符串不应以分号结束。
				// 第二个参数：可选。规定 SQL 连接标识符。如果未规定，则使用上一个打开的连接。
				// 5.执行sql语句
				$result = mysqli_query($link, $sql);//语句返回一个资源标识符，如果查询执行不正确则返回 FALSE。
				
				// 6.结果$row = mysqli_fetch_array($result);(每次只能取到一行数据)
				// $row = mysqli_fetch_array($result); //这里其实就是返回我们真正想要拿到的数据（函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有）
				// mysql_fetch_array(data,array_type)
				// 7.处理查询到的数据
			if ($result) {
				$data = '删除成功';
			} else {
				$data = '删除失败';
			}
				
				// 8.断开数据库连接
				mysqli_close($link);
				$ret = array('retCode' => 0, "errCode" => 0, "data" => $data);
				echo json_encode($ret, JSON_UNESCAPED_UNICODE);
				// 
			}
		}
		$test = new TestMysql();
		$test->getUserInfo();
?>