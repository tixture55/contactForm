<?php
session_start();
require_once('FacadeCommentLogic.php');


class FacadeCommentLogicTest extends PHPUnit_Framework_TestCase{
		
		public function testDosomething()
		{
				$bar = new FacadeCommentLogic();
				$_SESSION['AITE'] =2199;
				$_SESSION['my_id'] =6000;
				$bar->insertIntroComment('hoge');
				$this->assertequals(true,true);
		}

}
