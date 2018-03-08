<?php

//Abstract class ( Can't instansiate abstract class directly without inherite to childclass. The abstract class can contain abstract and nonabstract method. The nonabstract method has not body and contents but it'll overwride to childclass with body and contents. )

abstract class Person{

	abstract public function name();	//abstract method

	public function age(){				//nonabstract method
		echo "Age is 30";
	}	
}

class Another extends Person{

	public function name(){
		return "Amar nam Rubel<br/>";
	}
}

$obj = new Another();
echo $obj->name();
echo $obj->age();