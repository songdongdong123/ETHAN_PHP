<?php
	header('Content-type:text/html;charset=utf-8');
	// echo "汉字";
	class Car{
		public $name;
		function __construct($name) {
			// 构造函数，可有可无，php在实例化类的时候，会优先执行构造函数
			// 一般可以在构造函数中初始化对象
			$this->name = $name;
		}
		public function getName() {
			echo $this->name;
		}
	}
	$bmw = new Car('奔驰'); // 实例化对象
	$bmw->getName();
?>