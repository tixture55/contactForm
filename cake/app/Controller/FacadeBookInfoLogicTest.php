<?php

require_once('FacadeBookInfoLogic.php');

class FacadeBookInfoLogicTest extends PHPUnit_Framework_TestCase{
	public function test_モックを書いてみる()
	{
		$target = new FacadeBookInfoLogic();
		$mock= $this->getMock('FacadeBookInfoLogic', array('tableSearch','arrayGet','listGet'));
		$mock->expects($this->any())
			->method('tableSearch')
			->will($this->returnValue(5));

			$this->assertCount(5, $target->tableSearch($mock));
	}}
