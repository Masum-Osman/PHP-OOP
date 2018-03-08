<?php

//auto load files


//general system
// function __autoload($class_name){
// 	include "classes/" . $class_name . ".php";
// }


//latest system
spl_autoload_register(function($class_name){
	include "classes/" . $class_name . ".php";
});

$java = new Java();
$php = new Php();
$python = new Python();