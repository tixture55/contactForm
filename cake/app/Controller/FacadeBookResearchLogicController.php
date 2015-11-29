<?php

require_once('FacadeBookInfoLogic.php');

Class FacadeBookResearchLogicController{
	
	    protected $name;
	    protected $floor;
			protected $bookinfo;
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
			public function customerSearch($name,$type){
						$this->name = $name;
						$facade_customer_info = new FacadeBookInfoLogic();
						$this->list = $facade_customer_info->tableSearch($this->name,$type);
						return $this->list;
			}
			public function bookInfoGet(){
						return $this->bookinfo;
			}
			public function set_floor($floor){
								$this->floor = $floor;

			}
			public function search_author($name){
					$this->name = $name;
					if($this->name =='test'){
								$this->name = 'test';
					}else{
								$this->name = 'other';
					}
			}
			public function search_getAuthor(){
					return $this->name;
			}
      
			public function search_getFloor($name){
					
					
					return $this->floor;
			}
	}
