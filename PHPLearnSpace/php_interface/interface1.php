<?php  
//一、接口是什么 
	// 1.interface是类的模板
	// 2.在接口里面只需要定义要实现的方法，方法必须是空方法
	// 3.方法在接口里面是不做具体实现的
	// 4.接口是类的模板，类是对象的模板
	// 5.使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
	// 6.接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
	// 7.接口中定义的所有方法都必须是公有，这是接口的特性。
//二、什么时候使用接口 
	// 1.定规范，保持统一性；
	// 2.多个平级的类需要去实现同样的方法，只是实现方式不一样
//三、接口使用规范
	// 1.接口不能实例化
	// 2.接口的属性必须是常量
	// 3.接口的方法必须是public【默认public】，且不能有函数体
	// 4.类必须实现接口的所有方法
	// 5.一个类可以同时实现多个接口，用逗号隔开
	// 6.接口可以继承接口【用的少】
	
	interface Usb {
		public function readyData (); // 读数据
		public function writeData (); // 写数据
	}
	class Android implements Usb {
		public function readyData () {
			echo "我是安卓的usb，我可以读数据,<br/>";
		}
		public function writeData () {
			echo "我是安卓的usb，我可以写数据,<br/>";
		}
	}
	class Ios implements Usb {
		public function readyData () {
			echo "我是ios的usb，我也可以读数据，<br/>";
		}
		public function writeData () {
			echo "我是ios的usb，我也可以写数据，<br/>";
		}
	}
	class Phone {
		public static function factory (Usb $user) { // 这里的Usb是我们约束了factory方法的参数必须是实现了Usb接口的类的实例化对象
			return $user;
		}
	}
	$android = Phone::factory(new Android());
	$android->readyData();
	$android->writeData();

	$ios = Phone::factory(new Ios());
	$ios->readyData();
	$ios->writeData();
?>