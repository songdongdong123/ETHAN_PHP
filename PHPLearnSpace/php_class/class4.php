<?php
		header("Content-type:text/html;charset=utf-8");
		class Test {
			private function __construct () {
				// 如果构造函数定义成了私有方法，则不允许直接实例化对象了
				echo "对象被创建了";
			}
			private static $_object = null; // 这里定义一个空对象
			public static function getInstance () {
				// 可以是用静态方法实例化对象
				if(empty(self::$_object)) { // 如果对象没有被实例化
					// 实例化一个对象，并赋值给$_object
					self::$_object = new Test();
				}
				// 返回实例化后的实际对象
				return self::$_object;
			}
			public function testObject () {
				echo "检查对象是否被实例化";
			}
		}
		//Error:($car = new Car();) //这里不允许直接实例化对象
		$car = Test::getInstance(); //通过静态方法来获得一个实例
		echo "<hr/>";
		$car-> testObject();
?>