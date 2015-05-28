<?php
require_once('FacadeMemberTable.php');
require_once('FacadeIntroTable.php');
class FacadeMemberLogic{

				protected $mem_id;
				protected $post_id;
				protected $board_status;
				protected $intro_status;


				private static $instance = null;


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
								$this->board_status = $facade_customer_info->getList($this->mem_id);
								return $this->board_status;
				}
				public function introCardSearch($mem_id){

								$this->mem_id = $mem_id;
								$facade_customer_info = new FacadeIntroTable();
								$this->intro_status = $facade_customer_info->getList($this->mem_id);
								return $this->intro_status;
				}
				public function postSearch($post_id){

								$this->post_id = $post_id;
								$facade_customer_info = new FacadeMemberTable();
								$this->intro_mem_status = $facade_customer_info->getMemList($this->mem_id);
//var_dump($this->intro_mem_status);
return $this->intro_mem_status;
				}

}
