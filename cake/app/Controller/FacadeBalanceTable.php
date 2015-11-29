<?php
		require_once('ModelBase.php');
		
		class FacadeBalanceTable extends ModelBase{
		
				protected $name;
        protected $list;

				public function getList($id){
						if(isset($id) && $id !=''){

$sql = $this->db->prepare("SELECT * FROM AccountMoney WHERE SID=:sid");

						}else{
							
						}
						$sql->bindParam(':sid',$id);
						$sql->execute();
						$row_count_data =$sql->rowCount();
						while($row = $sql->fetch()) {
							  $id = $row['SID'];
						    $id = intval($id);
						    $name = $row['name'];
						    $account_balance = $row['account_balance'];
										$list = array('ID'=>$id, 'NAME'=>$name,  'BALANCE'=>$account_balance); 

								}
						$this->list = $list;
						return $this->list;
				}






		}
