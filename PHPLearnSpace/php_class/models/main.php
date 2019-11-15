<?php 
	// echo "string";
	spl_autoload_register(function($className){
		echo $className;
		echo "<br/>";
		include str_replace("\\", "/", $className.".php"); // 这里其实就是讲接收到类名转换为路径参数，去自动加载响应的文件
	});
	// 实例化user类
	$user = new router\user(); // 实例化的时候现在当前文件查找有没有当前类，如果没有，再去目录里面加载相应的文件，从而实例化对象
	echo $user->name;
	echo $user->age;
	echo "<hr/>";
	// 实例化car类
	$test = new test\car();
	echo $test->name;
	echo "<hr>";
	// 实例化person类
	$pers = new test\person();
	echo $pers->name;
	echo "<hr/>";
	// 实例化team类
	$team = new router\team();
	echo $team->name;
?>