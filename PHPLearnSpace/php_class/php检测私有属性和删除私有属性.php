<?php
		// php中提供了isset方法，用来检测属性是否可访问
		// 因为私有属性是不可以被直接访问的，那么怎么【判断私有属性是否存在呢？
		// php给我们提供了__isset方法，当php调用isset方法检测属性时候存在的时候，
		// 如果返回false（也就是不存在的时候）会自动去调用__isset方法
		// 那么我们就可以使用isset方法和__isset方法结合来使用，用来检测私有属性是否存在
		// class Test {
		// 	private $name = 'abc';
		// 	public function __isset($var) {
		// 		// var_dump($var);
		// 		// 当isset返回false的时候php会自动帮我们调用这里的__isset方法
		// 		// 在类的内部私有属性是可以被访问的
		// 		return isset($this->$var)?true:false;
		// 	}
		// }
		// $test = new Test();
		// var_dump(isset($test->name));

		class Test {
			private $name = 'aaa';
			public function __unset($var) {
				echo $var;
				unset($this->$var);
				echo "<br/>";
				echo "属性被删除了";
				echo $this->$name;
			}
		}
		$test = new Test();
		// 当用户调用unset方法去删除类属性的时候，如果该属性是私有属性时，发现取法删除，这个时候我们要在类里面写上__unset方法，
		// php会帮我们自动调用__unset方法，在__unset方法里面，在执行unset方法删除私有属性
		unset($test->abc);
?>