<?php  
header('Content-Type:text/html;charset=utf-8');
	// 工厂模式（也称为工厂类）
	// 工厂模式是我们最常用的实例化对象模式，是用工厂方法代替new操作的一种模式。
	// 使用工厂模式的好处是，如果你想要更改所实例化的类名等，则只需更改该工厂方法内容即可，不需逐一寻找代码中具体实例化的地方（new处）修改了。为系统结构提供灵活的动态扩展机制，减少了耦合。
	// 何时使用工厂模式？
	// 简单来说，当需求对类的个数不明确的时候，可以使用工厂模式
	// 根据抽象程度的不同，PHP工厂模式分为三种：
	// 1.简单工厂模式
	// 简单工厂模式又称静态工厂方法模式，之所以可以这么说，是因为简单工厂模式是通过一个静态方法来创建对象的。
	interface USB {
		// 接口是类的模板，只用来定义要实现的方法，方法必须是空方法，不在接口里面做具体实现
		public function readyData ();
	}
	class Android implements USB {
		public function readyData () {
			echo "我是安卓的usb，我是读数据的，<br/>";
		}
	}
	class Ios implements USB {
		public function readyData () {
			echo "我是Ios的usb，我也可以读数据，<br/>";
		} 
	}
	class Factory {
		// 定义一个工厂类，专门用来实例化对象
		static function newAndroid () {
			// 简单工厂里的静态方法,用于实例化Android类
			return new Android();
		}
		static function newIos () {
			// 简单工厂里的静态方法,用于实例化Ios类
			return new Ios();
		}
	}
	$android = Factory::newAndroid();
	$android->readyData();
	$ios = Factory::newIos();
	$ios->readyData();
	
	// 2.工厂方法模式
	// 定义一个用于创建对象的接口，让子类决定哪个类实例化。 他可以解决简单工厂模式中的封闭开放原则问题。
	
	// 3.抽象工厂模式
?>