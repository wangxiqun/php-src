--TEST--
get_class_methods(): Testing with interface
--FILE--
<?php

interface A { 
	function a();
	function b();
}

class B implements A {
	public function a() { }
	public function b() { }
	
	public function __construct() {
		var_dump(get_class_methods('A'));
		var_dump(get_class_methods('B'));
	}
	
	public function __destruct() { }
}

new B;

?>
--EXPECTF--
Strict Standards: Redefining already defined constructor for class B in %s on line %d
array(2) {
  [0]=>
  unicode(1) "a"
  [1]=>
  unicode(1) "b"
}
array(4) {
  [0]=>
  unicode(1) "a"
  [1]=>
  unicode(1) "b"
  [2]=>
  unicode(11) "__construct"
  [3]=>
  unicode(10) "__destruct"
}
