<?php
		class Test {
			public function __call ($func,$arg) {
				// $func函数名
				// $agr参数
				// 当用户调用类中不存在的方法的时候，__call方法会被自动调用
				var_dump($func);
				echo "<br/>";
				var_dump($arg);
			}
		}
		$test = new Test();
		$test->go(1, 'ok');
?>