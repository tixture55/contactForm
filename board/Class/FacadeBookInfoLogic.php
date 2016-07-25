<?php

require_once('FacadeBookTable.php');

class FacadeBookInfoLogic{

				protected $name;
				protected $table_dto;
				protected $bookinfo;
				protected $list;

				public function tableSearch($name){
								$this->name = $name;
				        $list = new FacadeBookTable();
								$get_list = $list->getList($this->name);
				        return $get_list;
				}
				public function arrayGet(){
								return $this->bookinfo;
				}

				public function listGet(){
								return $this->list;
				}

}
