<?php

class ClientContainerTest extends PHPUnit_Framework_TestCase
{
				public function test_モックを書いてみる()
				{
								$hoge = $this->getMock('TwitterClient', array('tweet'));
								$hoge->expects($this->any())
												->method('tweet')
												->will($this->returnValue(true));

								$hoge->tweet('大心なう'); // trueが返る
				}
}
