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

			try{  
				$this->db->beginTransaction();
				$sql3 = "SELECT * FROM AccountMoney WHERE SID=:sid FOR UPDATE";
				$sql = $this->db->prepare("UPDATE AccountMoney SET account_balance = account_balance -:output WHERE SID=:sid");
				$sql2 = "SELECT account_balance FROM AccountMoney WHERE SID=:sid";
				$stmt2 = $this->db->prepare($sql3);
				$stmt3 = $this->db->prepare($sql2);
				$sql->bindParam(':sid',$id);
				$stmt2->bindParam(':sid',$id);
				$stmt3->bindParam(':sid',$id);
				$sql->bindParam(':output',$output);
				$stmt2->execute();
				$stmt3->execute();
				$sql->execute();
				$stmt2->closeCursor(); 
				$stmt3->closeCursor(); 
				$sql->closeCursor(); 
				$this->db->commit();
						$result = $stmt3->fetchAll();
						var_dump($result);
						while($row = $stmt3->fetch()) {
							  $balance = $row['account_balance'];

			      }
			}catch(PDOException $e){
				$this->db->rollback();
			}

	}





}
}
