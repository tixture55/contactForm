<?php

require_once('FacadeBookInfoLogic.php');

Class FacadeAuthLogicController{
	
	    protected $name;
	    protected $pass;

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

						$facade_customer_info = new FacadeBookInfoLogic();
						$this->list = $facade_customer_info->tableSearch($this->name,$type);
						return $this->list;
			}
      
	}
