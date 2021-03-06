<?php
require_once('FacadeMemberTable.php');
require_once('FacadeIntroTable.php');
class FacadeMemberLogic{

				protected $mem_id;
				protected $post_id;
				protected $board_status;
				protected $intro_status;
				protected $intro_mem_status;


				private static $instance = null;
        private function __construct(){}
        
				//インスタンスを取得するメソッドを追加
				public static function getInstance(){
								if (is_null(self::$instance)){
												self::$instance = new FacadeMemberLogic();
								}
								//インスタンスを返却する
								return self::$instance;

				}

				public function customerSearch($mem_id){

								$this->mem_id = $mem_id;
								$facade_customer_info = FacadeMemberTable::getInstance();
								return $this->board_status = $facade_customer_info->getList($this->mem_id);
				}
				public function introCardSearch($mem_id){

								$this->mem_id = $mem_id;
								$facade_customer_info = new FacadeIntroTable();
								return $this->intro_status = $facade_customer_info->getList($this->mem_id);
				}
				public function postSearch($post_id){

								$this->post_id = $post_id;
								$facade_customer_info = new FacadeMemberTable();

								return $this->intro_mem_status = $facade_customer_info->getMemList($this->post_id);
				}

}
