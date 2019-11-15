<?php
		header("Content-type:text/html;charset=utf-8");
		// php中提供了isset方法，用来检测属性是否可访问
		// 因为私有属性是不可以被直接访问的，那么怎么【判断私有属性是否存在呢？
		// php给我们提供了__isset方法，当php调用isset方法检测属性时候存在的时候，
		// 如果返回false（也就是不存在的时候）会自动去调用__isset方法
		// 那么我们就可以使用isset方法和__isset方法结合来使用，用来检测私有属性是否存在
		class Test {
			private $name = 'abc';
			public function __isset($var) {
				return isset($this->$var)?$var.'属性存在':$var.'属性不存在';
			}
		}
		$test = new Test();
		var_dump(isset($test->$name))
?>