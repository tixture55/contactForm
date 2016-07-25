<?php
require_once('ModelBase.php');


class BookTable extends ModelBase{

	protected $name;
	protected $list;

	public function getList($id){
		try{	

			//access_logテーブルに参照者と参照されたユーザと日時を追加
			$sql2 = "update Customer set Last_Name ='山田',First_Name = '健一' where Last_Name = 'ty'";
			$stmt = $this->db->prepare($sql2);
			$stmt->execute();

		}
		catch(PDOException $e){
			$pdo->rollback();
		}
	}
}

$bt = new BookTable();
$bt->getList(26);
?>
