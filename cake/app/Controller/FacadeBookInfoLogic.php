<?php

require_once('FacadeBookTable.php');
require_once('FacadeBalanceTable.php');

class FacadeBookInfoLogic{

				protected $name;
				protected $table_dto;
				protected $bookinfo;
				protected $list;
				protected $type;

				public function tableSearch($name,$type){
								$this->name = $name;
								$this->type= $type;
				        
								//type:1は残高テーブルの参照
								if($this->type == 1){
									$list = new FacadeBalanceTable();
								  $get_list = $list->getList($this->name,$this->type);
									
								}elseif($this->type == 2){
									$list = new FacadeBalanceTable();
								  $list->updateAccountMoney($this->name,$this->outputMoney);
								  	
								}else{	
									$list = new FacadeBookTable();
								  $get_list = $list->getList($this->name,$this->type);
								}
								
								return $get_list;
				}


}
