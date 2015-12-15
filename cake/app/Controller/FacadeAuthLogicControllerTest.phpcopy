<?php
require_once('FacadeAuthLogicController.php');


//class FacadeAuthLogicControllerTest extends ControllerTestCase {
class FacadeAuthLogicControllerTest extends PHPUnit_Framework_TestCase{

	public function testAuthCompare() {
		// FacadeAuthLogicController クラスのモックを作成する。
		$bar = $this->getMock('FacadeAuthCheckTable');
		$bar->expects($this->any())
			->method('getList')
			->will($this->returnValue(Array( 'ID' => 900362,'SID' => 900362, 'NAME' => 'sachikoyamamoto' ) ));

		$foo = new FacadeAuthLogicController($bar);   // Constructor Injection でモックを注入する。

		$this->assertContains('sachikoyamamoto',$foo->authCompare('sachto','y67'));
	}
}
