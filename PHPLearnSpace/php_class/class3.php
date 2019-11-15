<?php
		header("Content-type:text/html;charset=utf-8");
		// echo "string";
		class Test {
			public static $name = "testName";
			private static $age = "18";
			public static function getName () {
				// echo $this->name; 类中不能使用$this->属性名;来访问静态属性，可以使用self::$属性名来访问静态属性
				echo self::$name;
				echo self::$age;
			}
		}
		// 不实例化，可以使用（类名::方法名）来直接访问类中的静态方法
		// 使用（类名::$属性名）来访问静态属性
		$func = "getName";
		Test::$func(); // 访问静态方法
		echo "<hr/>";
		echo Test::$name; // 访问静态属性
		// echo Test::$age; 报错，受保护的静态不能再外部被访问，只能在类中使用self::$属性名来访问
?>