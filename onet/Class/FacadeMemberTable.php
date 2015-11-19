
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<?php


require_once('ModelBase.php');

class FacadeMemberTable extends ModelBase{

				protected $name;
				protected $list;

				public function getList($id){
								try{
												$sql = $this->db->prepare("SELECT * FROM Cust_status order by Cust_status.MemId");
								}catch(Exception $e){
												die($e->getMessage());
								}
								//$sql->bindParam(':sid',$id);
								$sql->execute();
								$row_count_data =$sql->rowCount();
								$flg = 0;
								while($row = $sql->fetch()) {
												$id = $row['MemId'];
												$id = intval($id);
												$sex = $row['sex'];
												$intro_num = $row['intro_num'];
												$o_board_num = $row['open_board_num'];
												$comment_from_id = $row['comment_from_id'];
												$b_comment = $row['board_comment'];
												$b_comment = mb_convert_encoding($b_comment, "utf-8");

												$list[] = array('ID'=>$id, 'SEX'=>$sex, 'INTRO_NUM'=>$intro_num, 'O_BOARD_NUM'=>$o_board_num, 'COM_FROM'=>$comment_from_id, 'B_COMMENT'=>$b_comment); 

								}



								//var_dump($list);
								$this->list = $list;
								unset($list);
								return $this->list;
				}






}
