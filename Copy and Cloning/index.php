<?php

class Person{

	public $var;
}

$obj = new Person();

//cloning value from first one
$newObj = clone $obj;

$obj->var = 'Hello';
$newObj->var = 'World';

echo 'Original value : '. $obj->var . '<br/>';
echo 'New value : '.$newObj->var;