<?php
	header("Content-type:text/html;charset=utf-8");
	// 根据当前执行的上下文来确定self的所指向的类
	class A {
		public static function who () {
			echo "我是A类中的who方法";
		}
		public function test () {
			// 在类中调用静态方法使用self，self代表当前类的本身
			// self::who();
			// 这里使用static，php会根据当前执行的上下文来动态改变类的指向（相当于js里面的改变this指向，也就是当前调用者是哪个类）
			static::who();
		}
	}
	class B extends A {
		public static function who () {
			echo "我是B类中的who方法";
		}
	}
	// 假设我们现在调用B类中的test（B继承自A所以B可以直接调用A中的test方法）方法那么应该输出的是“我是A类中的who方法”
	// / 但是我们想要调用的不是A类中的方法，那么该怎么办，我们可以将A类中的self换成static，
	// 这样就会改变self的指向，会根据执行的上下文类确定self代表的对象
	// 综上所述，其实也就是相当于js中的改变this指向
	B::test();
	// 然后我们在用A类去调用test方法，发现是指向A类本身的
	A::test();
?>