<?php

require_once('FacadeBookInfoLogic.php');

Class FacadeBookResearchLogic{
	
	    protected $name;
	    protected $floor;
			protected $bookinfo;
      protected $list;

			public function customerSearch($name){
						$this->name = $name;
						$facade_customer_info = new FacadeBookInfoLogic();
						$this->list = $facade_customer_info->tableSearch($this->name);
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
