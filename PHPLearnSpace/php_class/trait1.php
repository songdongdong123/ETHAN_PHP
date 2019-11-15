<?php 	 
		header("Content-type:text/html;charset=utf8");
		trait funA {
			public $name = '刘邦';
			public function test1 () {
				echo "hello";
			}
		}
		trait funB {
			public $age = 41;
			public function test2 () {
				echo "word1111";
			}
		}
		trait funC {
			// trait是可以使用嵌套的
			// 使用方式，还是使用关键字use一下funA和funB即可
			use funA,funB;
			// 当然他还是可以拥有自己的方法和属性的
			public function test3 () {
				echo "我是funC里面的方法";
			}
		}
		class Go {
			// 在一个类里面可以use多个trait
			// 这样就打破了。类只能从单个类里面继承方法和属性
			use funC;
		}
		$go = new Go();
		$go->test1();
		$go->test2();
		$go->test3();
		echo $go->name;
		echo $go->age;
?>