<?php

//Static class ( without keeping the class to a variable )

class Person{
	public static $age = 20;

	public static function name($nam){
		return "Tomar nam hocche ".$nam;
	}
}

echo Person::name('Said');

echo " Tomar age hocce ". Person::$age;