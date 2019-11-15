<?php
/**
	这是一个抽象类的工具函数
	抽象类的应用：不需要被实例化，只需要被继承时，使用抽象类
	如果含有抽象方法的话一定要在子类中重新实现
*/
namespace lib;
abstract class util {
	// 链接数据库
	public function mysqlInit($host, $username, $password, $dbname) {
			$connect = mysqli_connect($host, $username, $password, $dbname);
			if (!$connect) {
				die("连接失败: " . mysqli_connect_errno());
			}
			mysqli_query($connect, "set names 'utf8'");
			return $connect;
	}
	// 获取前端请求参数
	public function getPostParams ($index) {
			if(isset($_POST[$index])){
	      return $_POST[$index];
	    } else if(isset($_GET[$index])){
	      return $_GET[$index];
	    } else{
	      return false;
	    }
	}
	// 用户密码加密
	public function md5PassWord ($password) {
		if (!$password) {
			return false;
		}
		return md5(md5($password).'ethanloveyou');
	}
}
?>