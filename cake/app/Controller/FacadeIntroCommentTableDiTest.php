<?php
session_start();
require_once('FacadeCommentLogicDi.php');
require_once('FacadeIntroCommentTableDi.php');


class FacadeIntroCommentTableDiTest extends PHPUnit_Framework_TestCase{

  private $fc;


		public function testDosomething()
		{
				$bar = new FacadeIntroCommentTableDi();
				$_SESSION['no'] =10;
				$_SESSION['AITE'] =24;
				$_SESSION['my_id'] =65;
				$bar->select();
				$this->assertCount(20,$bar->select());
				$this->assertCount(20,$bar->select());
		}

}
