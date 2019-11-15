<?php  
	// 一、抽象类（abstract）
	// 程序中，有些类的作用只是用来继承，无须实例化；
	// 为了满足类的这种需求，php提供了抽象类的概念 ，关键词abstract；
	// 二、抽象类原则：
	// 1.抽象类不能被实例化
	// 2.有抽象方法的类一定是抽象类；类必须要abstract修饰
	// 3.抽象方法不能有函数体；即abstract function fun();
	// 4.抽象类中的非抽象方法，可以被子类调用
	// 5.非抽象子类继承抽象类，子类必须实现父类的所有抽象方法
	// 6.抽象子类继承抽象类，无需继承父类的抽象方法
	
	// Test类的作用只是用来继承，无须实例化；
	abstract class Test {
		public function fun1() {
			echo "我是抽象类的非抽象方法1,<br/>";
		}
		public function fun2() {
			echo "我是抽象类的非抽象方法2,<br/>";
		}
		// 下面两个是抽象类的空方法
		public function fun3() {}
		public function fun4() {}
		// 下面是抽象类的抽象方法(要想继承我，就要在你里面实现我这个方法)
		abstract function fun5();
	}

	// new Test()//(这里会报错) 原因：抽象类不能被实例化，之只能继承
	class Mmp extends Test{
		// 继承类里面必须全部实现抽象类的空方法
		public function fun3() {
			echo "我实现了抽象类里面的fun3，<br/>";
		}
		public function fun4() {
			echo "我实现了抽象类里面的fun4,<br/>";
		}
		public function fun5() {
			echo "我实现了抽象类里面的抽象方法fun5";
		}
	}
	$mmp = new Mmp();
	$mmp->fun1();//抽象类中的非抽象方法可以调用
	$mmp->fun2();//抽象类中的非抽象方法可以调用
	$mmp->fun3();//继承类里面必须全部实现抽象类的空方法才能被调用
	$mmp->fun4();
	$mmp->fun5();
?>