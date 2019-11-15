<?php
	class Test {
		// php私有属性是不可以被外部方访问的，只能在类的内部访问，
		// 不过我们可以在类中自定义set私有属性的方法，来修改类的私有属性
		private $a = '';
		private $b = '';
		public function setA ($val) {
			$this->a = $val;
		}
		public function getA () {
			return $this->a;
		}
	}
	$test = new Test();
	// 这里调用set方法
	$test->setA('123');
	// var_dump($test->getA());
	// 那么假如一个类中有多个私有属性都是需要被修改的呢，我们不能对每一个私有属性写一个修改方法吧？那么怎么办？往下看
	// php中为我们提供了两个魔术方法__set(参数1，参数2)方法和__get(参数1)方法
	// __set(参数1,参数2)
	// 参数1代表要设置的属性名
	// 参数2代表要设置的值
	// php会帮我们动态的去设置私有属性的值
	class Test1 {
		private $A = '';
		private $B = '';
		public function __set($var, $val) { // php给我们提供的内置方法用来动态设置私有属性的值
			// $var代表要被设置的属性名
			// $val代表要被设置的属性的值
			$this->$var = $val;
		}
		public function __get($var) {// php给我们提供的内置方法用来动态获取私有属性的值
			// $var代表要获取的属性名
			return $this->$var;
		}
	}
	$test1 = new Test1();
	// 设置的时候我们直接使用访问属性的语法并赋值，php会自动帮我们调用__set方法去动态的设置私有属性
	$test->A = 'aaaa';
	$test->B = 'bbbb';
	// 获取属性的时候，也是和访问正常属性一样的语法，直接访问该属性，PHP会帮我们自动调用__get方法，动态返回私有属性的值，而不报错
	var_dump($test->A);
	var_dump($test->B);
?>