<?php

//final ( the final class & final method are not inheritable and the methor overwritable but reusable )

final class Person{
	public function __construct(){
		echo 'We are playing with OOP';
	}
}


class Man extends Person{
	
}

$obj = new Man();