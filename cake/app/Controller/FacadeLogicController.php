<?php

App::uses('FacadeBalanceInfoLogic', 'Controller');
App::uses('FacadeBalanceTable', 'Controller');

Class FacadeLogicController{
	
	    protected $name;
      protected $list;
      protected $history;

			public function customerSearch($name,$type){
			  $this->name = $name;
				$facade_customer_info = new FacadeBalanceInfoLogic();
				$this->list = $facade_customer_info->tableSearch($this->name,$type);
				
				return $this->list;
			}
			public function historySearch($name,$type){
			  $this->name = $name;
				$facade_customer_info = new FacadeBalanceInfoLogic();
				$this->history = $facade_customer_info->tableSearch($this->name,$type);
				
				return $this->history;
			}
			public function balanceUpdate($name,$type,$output){
			  $this->name = $name;
				$facade_customer_info = new FacadeBalanceTable();
				if(isset($this->name)){
					$tran_flg = $facade_customer_info->updateAccountMoney($this->name,$output);
							return $tran_flg;
				}	
			}
	}
