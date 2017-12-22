<?php
require_once('ModelBase.php');

class FacadeBookTable extends ModelBase{

	protected $name;
	protected $list;

	public function getList($id){
		try{
			if(isset($id) && $id !=''){
				$this->db->beginTransaction();
				$sql = $this->db->prepare("SELECT * FROM Customer left join Teletype on Customer.Telephone = Teletype.telephone left join board_status on Customer.SID = board_status.UserID WHERE SID=:sid order by Customer.SID limit 50");
			}else{
				$sql = $this->db->prepare("SELECT * FROM Customer where Customer.SID = 10 limit 50");

			}
			$sql->bindParam(':sid',$id);
			$sql->execute();
			//access_logテーブルに参照者と参照されたユーザと日時を追加
			$sql2 = "insert into access_log (id,accessor,be_accessed,ins_date) values(null,".$id.",2,now())";
			$stmt = $this->db->prepare($sql2);
			//$stmt->bindParam(':sid',$id);
			$stmt->execute();
		  //$stmt->closeCursor();
		
		//$this->db->commit();
		}catch(PDOException $e){
			//ロールバック
			//$this->db->rollBack();
			echo "失敗しました。" . $e->getMessage();
		}
		$row_count_data =$sql->rowCount();
		$flg = 0;
		while($row = $sql->fetch()) {
			$id = $row['SID'];
			$id = intval($id);
			$lastname = $row['Last_Name'];
			$firstname = $row['First_Name'];
			$tele = $row['Telephone'];
			$job = $row['Job'];
			if(isset($row['type'])){
				$type = $row['type'];
				if(is_null($type)) $type= '-';
			}
			if(isset($row['type'])){
				$list = array('ID'=>$id, 'LASTNAME'=>$lastname, 'FNAME'=>$firstname, 'TELE'=>$tele, 'JOB'=>$job, 'TYPE'=>$type); 
				$list[] = array_filter($list, function($var){
						return is_int($var);
						});
			}else{
				$list[] = array('ID'=>$id, 'LASTNAME'=>$lastname, 'FNAME'=>$firstname, 'TELE'=>$tele, 'JOB'=>$job, 'TYPE'=>'-'); 

			}
		}
		$this->list = $list;
		var_dump($this->list);
		unset($list);
		return $this->list;
	}






}
