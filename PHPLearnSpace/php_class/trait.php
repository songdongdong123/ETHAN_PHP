<?php 	 
		// 一、
		// php是单继承语言，也是就是一个类只能继承一个单独的原始类
		// 自PHP5.4.0起，PHP实现了一种代码复用的方法，称为Trait
		// trait 是在一些类(Class)的应该具备的特定的属性或方法,而同父级的另外一些类应该避免包含这些属性和方法情况下使用的.
		// 类成员优先级为:当前类>Trait>父类
		trait funcA {
			// 二、
			// trait关键字的使用和类定义一样
			// 也是可以定义方法和属性的
			public function test1 () {
				echo "hello";
			}
			public function test2 () {
				echo "word";
			}
			public function c () {
				$this->test1();
				$this->test2();
			}
		}
		class A {
			// 在类A中使用use关键字，可以实现复用func里面的方法和属性（变相的继承了func中的属性和方法）
			use funcA;
		}
		$a = new A();
		$a->c();
?>