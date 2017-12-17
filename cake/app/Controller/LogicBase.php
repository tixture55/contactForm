<?php

	
class LogicBase
{
	public $set;
	
	function __call($Name, $Value){
		echo $Name.' does not exists methods.';
		return false;
	}

	function __set($Name, $Value){
			$this->set = $Value;
	}

}
