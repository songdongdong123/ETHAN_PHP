<?php
		header("Content-type:text/html;charset=utf-8");
		class Car {
			function __construct () {
				// 对象被实例化的时候调用
				echo "构造函数被调用";
				echo "<hr>";
			}
			function __destruct() {
				// 对象被销毁的时候调用
				echo "析构函数被调用";
				echo "<hr>";
			}
		}
		$car = new Car();
		echo "对象被即将销毁";
		echo "<hr>";
		unset($car); // 销毁对象
?>