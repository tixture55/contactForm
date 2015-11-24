<?php
require_once('ModelBase.php');


class BookTable extends ModelBase{

	protected $name;
	protected $list;

	public function getList($id){
		try{	

			$this->db->beginTransaction();
			$sql = $this->db->prepare("SELECT * FROM Customer left join Teletype on Customer.Telephone = Teletype.telephone left join board_status on Customer.SID = board_status.UserID WHERE SID=:sid order by Customer.SID limit 50");
			$sql->bindParam(':sid',$id);
			$sql->execute();
			//access_logテーブルに参照者と参照されたユーザと日時を追加
			$sql2 = "insert into access_log (id,accessor,be_accessed,ins_date) values(null,".$id.",9,now())";
			$sql3 = "SELECT * FROM Customer WHERE Last_Name = 'sachiko' OR Last_Name ='joe' OR area = 34 FOR UPDATE;";
			$sql4 = "update Customer set hobby ='progf' where Last_Name ='sachiko'";
			$sql5 = "update Customer set hobby ='fishing' where Last_Name ='joe'";
			$sql6 = "update Customer set area ='izuoka' where age = 34";
			$stmt = $this->db->prepare($sql2);
			$stmt2 = $this->db->prepare($sql3);
			$stmt3 = $this->db->prepare($sql4);
			$stmt4 = $this->db->prepare($sql5);
			$stmt5 = $this->db->prepare($sql6);
			$stmt->execute();
			//$stmt2->execute();
			for($i =0;$i < 10; $i++){
				$stmt3->execute();
			}
			$stmt4->execute();
			$stmt5->execute();
			$stmt->closeCursor();
			$stmt2->closeCursor();
			$stmt3->closeCursor();
			$stmt4->closeCursor();
			$stmt5->closeCursor();

      sleep(7);
			$this->db->commit();
			echo 'commit done';
		}
		catch(PDOException $e){
			$pdo->rollback();
		}
	}
}

$bt = new BookTable();
$bt->getList(26);
?>
