<?php
	// function __autoload($className){}是一个自动加载类的函数
	function __autoload ($className) {
		echo $className;
		require($className.'.php');
	}
	// 当我们尝试调用类的时候，会在当前文件里面查找
	// 如果没有找到，就会调用__autoload()函数去实现当前目录下的类的路由
	$user = new user();
	var_dump($user);// 然后我们就可以拿到这个类，并实例化这个类
	// $car = new Car('宝马');
	// echo $car->name;
?>