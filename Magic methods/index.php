<?php

class Person{
	public function __construct(){
		echo "I am __construct function and I run without calling<br/>";
	}
	public function name(){
		echo "I am a normal function and execute after calling<br/>";
	}
	public function __get($a){
		echo "I am __get function and I will get any unset property name as my argument like ".$a."<br/>";
	}
	public function __set($d, $e){
		echo "I am __set function and I will set any property that has assigned value and I set that as my arguments like first is ".$d." and second is ".$e."<br/>";
	}
	public function __destruct(){
		echo "I am __destruct function and I run after executing all scripts<br/>";
	}
}

$obj = new Person();
$obj->Shofik;
$obj->Sholel;
$obj->Shakil = 'exclusive';
$obj->Go = 'Again';
echo $obj->name();