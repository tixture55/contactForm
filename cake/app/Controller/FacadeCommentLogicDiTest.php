<?php
session_start();
require_once('FacadeCommentLogicDi.php');
require_once('FacadeIntroCommentTable.php');


class FacadeCommentLogicDiTest extends PHPUnit_Framework_TestCase{

  private $fc;


		public function testDosomething()
		{
				$fc = new FacadeIntroCommentTable();
				$bar = new FacadeCommentLogicDi($fc);
				$_SESSION['AITE'] =2199;
				$_SESSION['my_id'] =6000;
				$bar->insertIntroComment('hoge');
				$this->assertequals(true,true);
		}

}
