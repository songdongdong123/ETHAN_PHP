<?php  
	// 为什么要有单例模式
	// 因为当我们重复实例一个类的时候，PHP会不断的开辟新的内存空间，帮我们存放实例化出来的对象
	// 这样是比较占内存的，是不合理的
	// 所以这个时候就引入了单例模式，他能保证我们的类在整个系统中只会被实例化一次，这样就节省了内存空间
	// class Test {

	// }
	// $test1 = new Test();
	// $test2 = new Test();
	// $test3 = new Test();
	// 像上面这样，就是开辟了三块内存空间，用来存放我们实例化出来的对象
	class Test {
		// 使用一个私有的静态变量，用来保存Test实例化的对象
		private static $_instance = null;
		// 定义一个私有的变量，用来接收实例化对象时的参数
		private $config;
		private function __construct ($config) {
			// 私有化构造函数，防止类被直接实例化
			$this->config = $config;
			echo "我被实例化了";
			echo "<br/>";
		}
		private function __clone () {
			// 私有化_clone魔术方法，防止类被直接克隆
		}
		public static function getInstance ($config) {
			// 定义一个静态方法，用来获取类的唯一实例
			// 先判断$_instance是否是Test的实例化对象
			if(!self::$_instance instanceof self) { // 静态变量在类中使用是用self::变量名self代表类本身
				// 如果没有就实例化
				self::$_instance = new self($config);
			}
			return self::$_instance;
		}
		public function getConfig () {
			echo $this->config;
			echo "<br/>";
		}
	}
	// $obj = new Test('尝试去直接实例化');报错，无法被直接实例化，因为我们把构造方法设置为了私有的，只能在类的内部使用
	$obj1 = Test::getInstance('我是单例模式实例化出来的类');
	$obj1->getConfig(); // 我是单例模式实例化出来的类
	$obj2 = Test::getInstance('再次实例化，看看');
	$obj2->getConfig(); // 我是单例模式实例化出来的类
	// 最终输出结果如下（所以我们根据结果可以看出，Test类只被实例化了一次，就算再次调用Test类中的静态方法getInstance也不会重新去实例化一个新的对象）
	// 我被实例化了
	// 我是单例模式实例化出来的类
	// 我是单例模式实例化出来的类

?>