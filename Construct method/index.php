<?php

//Construct method ( without calling the method appearing it's output )

class Person{

	public function __construct(){
		echo "I execute automatically";
	}
}

$obj = new Person();