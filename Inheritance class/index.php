<?php

//inheritance class

class Person{
	public $age = 20;

	public function name($nam){
		return "Tomar nam hocche ".$nam;
	}
}

class Someone extends Person{

}

$obj = new Someone();

echo "Age is : ". $obj->age;
echo "<br/>";
echo $obj->name("Sabuj");