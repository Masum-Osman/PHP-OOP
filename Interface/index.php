<?php

//interface is similar with abstract class (can't instansiate the interface class but can use to subclass by 'implements' keyword and also accept multiple interface classes.)

interface Person{
	public function testing();
}

//multiple classes accpet
class Man implements Person{	
	public function __construct(){
		$this->testing();
	}	

	public function testing(){
		echo "We are working hard for the project";
	}
}

$obj = new Man();