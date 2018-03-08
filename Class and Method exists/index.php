<?php

//class_exists() and method_exists() function can check if the class and method exist.

class Person{
	public function abc(){
		echo "I am abc function";
	}
}

if(class_exists('Person')){
	$obj = new Person();
	echo 'Class found<br/>';
	if(method_exists($obj, 'abc')){
		echo 'Method found';
	}else{
		echo 'Method not found';
	}
}else{
	echo 'Class not found';
}