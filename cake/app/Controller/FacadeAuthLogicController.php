<?php

require_once('FacadeAuthCheckTable.php');

Class FacadeAuthLogicController{
	
	    protected $name;
	    protected $pass;
	    protected $list;

				private static $instance = null;


				//インスタンスを取得するメソッドを追加
				public static function getInstance(){
								if (is_null(self::$instance)){
												self::$instance = new FacadeBookResearchLogic();
								}
								//インスタンスを返却する
								return self::$instance;

				}
			public function authCompare($name,$pass){
						$this->name = $name;
						$this->pass = $pass;
						$facade_auth_check = new FacadeAuthCheckTable();
						$this->list = $facade_auth_check->getList($this->name,$this->pass);
						return $this->list;
			}
      
	}
