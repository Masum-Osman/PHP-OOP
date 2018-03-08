<?php

class Person{
	public $name = 'Rubel';
	const AGE 	 = 31;

	public function __construct(){
		echo 'Name is '. $this->name . ' and Age is ' . Person::AGE;
	}
}

$obj = new Person();