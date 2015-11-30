<?php
require_once('ModelBase.php');

class FacadeBalanceTable extends ModelBase{

	protected $name;
	protected $list;

	public function getList($id,$type){
		if(isset($id) && $id !='' && $type == 1){

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
	public function updateAccountMoney($id,$output){
		
		if(isset($id) && $id !=''){
			$sql = $this->db->prepare("UPDATE AccountMoney SET account_balance = account_balance -:output WHERE SID=:sid");

		}else{

		}
		$sql->bindParam(':sid',$id);
		$sql->bindParam(':output',$output);
		$sql->execute();

	}






}
