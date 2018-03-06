<?php

//Abstract class ( can't write something inside abstract method and instansiate it's value without child class )

abstract class Person{

	abstract public function name();
}

class Another extends Person{

	public function name(){
		return "Amar nam Rubel";
	}
}

$obj = new Another();
echo $obj->name();