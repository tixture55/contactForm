<?php

require_once '../../vendor/autoload.php';
	//App::uses('LoginsController', 'Controller');
//		require_once('LoginsController.php');

	class LoginsControllerTest extends CakeTestCase {

		private $LoginsController = null;

		public function setUp(){
				$this->LoginsController = new LoginsController;
				parent::setUp();
		}

		public function tearDown() {
				unset($this->LoginsController);
				parent::tearDown();

		}

}
