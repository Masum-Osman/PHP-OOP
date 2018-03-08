<?php

class MathCal{
	public $a;
	public $b;
	public $result;

	public function setVal($first, $second){
		$this->a = $first;
		$this->b = $second;
		return $this;
	}

	public function cal(){
		$this->result = "The Calculation : ".$this->a * $this->b;
		return $this->result;
	}
}

$obj = new MathCal();
echo $obj->setVal(4, 5)->cal();