<?php 
	// echo "string";
	spl_autoload_register(function($className){
		echo "<br/>";
		include str_replace("\\", "/", $className.".php"); // 这里其实就是讲接收到类名转换为路径参数，去自动加载响应的文件
	});
	class A extends lib\util {
		// public $speed = '12';
		public function textfun () {
			$x = parent::md5PassWord('123');
			echo $x;
		}
	}
	$X = new A();
	// var_dump($X);
	// echo $X->name;
	// $X->childtest();
	// echo '<br />';
	$X->textfun(); // 这里实例化出来的对象就拥有了util类下的方法和属性
?>