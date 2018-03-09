<?php

//type hinting ( can define the type of expected value as perameter )

class Calculation{
	public $a;
	public $b;

	public function addition(int $x,int $y){	//expecting intiger type value as perameter
		$this->a = $x;
		$this->b = $y;

		$result = $this->a + $this->b;
		return "The values are " . $this->a . " and " . $this->b . " and Addition is : " . $result;
	}
}

$obj = new Calculation();

echo $obj->addition(4, 5);