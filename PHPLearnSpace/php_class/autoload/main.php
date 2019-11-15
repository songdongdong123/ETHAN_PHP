<?php
	//第一种使用方法 
	spl_autoload_register(function($className){
		require $className.'.php';
	});
	$user1 = new user();
	var_dump($user1);
	echo "<hr/>";

	// 第二种方式，定义一个处理函数
	function autoload ($className) {
		require $className.'.php';
	}
	spl_autoload_register('autoload');
	$user2 = new user();
	var_dump($user2);

	// 第三种方式，定义一个路由处理类，在类中实现autoload方法，这个时候spl_autoload_register([]);接受一个数组作为参数
	// 数组的第一个元素是一个实例化的类，第二个参数是类中方法的名字
	class Auto {
		public function autoload ($className) {
			require $className.'.php';
		}
	}
	spl_autoload_register([new Auto, 'autoload']);
	$user3 = new user();
	var_dump($user3);
?>