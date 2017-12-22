
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<?php


require_once('ModelBase.php');

class FacadeMemberTable extends ModelBase{

				protected $name;
				protected $list;
				protected $intro_detail;
				protected $_id;
				
				private static $instance = null;
				/*
				public function __construct() {
				        $this->_id = md5(date('ymdhis') . mt_rand());
								    }
				*/
				//インスタンスを取得するメソッドを追加
				public static function getInstance(){
								if (is_null(self::$instance)){
												self::$instance = new FacadeMemberTable();
								}
								//インスタンスを返却する
								return self::$instance;

				}
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
								$this->list = $list;
								unset($list);
								return $this->list;
				}
				public function getMemList($id){
								try{


$sql = $this->db->prepare("SELECT * FROM introduce_card left join Customer on Customer.SID = introduce_card.frm_mem_id where introduce_card.post_id = :sid");

								}catch(Exception $e){
												die($e->getMessage());
								}
								$sql->bindParam(':sid',$id);
								$tt = $sql->execute();
								$row_count_data =$sql->rowCount();
								$flg = 0;
								while($row = $sql->fetch()) {
												$id = $row['SID'];
												$id = intval($id);
												$age = $row['age'];
												$hobby = $row['hobby'];
												$o_board_num = $row['area'];
												$comment_from_id = $row['Job'];
												$time = $row['last_updated'];
												$mem_id = $row['mem_id'];
												$frm_mem_id = $row['frm_mem_id'];
								}
												$list[] = array('ID'=>$id, 'AGE'=>$age, 'HOBBY'=>$hobby,'AREA'=>$o_board_num, 'JOB'=>$comment_from_id, 'TIME'=>$time); 
								$this->intro_detail = $list;
								
								//introduce_cardテーブルの整合性を確認
								try{
												//echo $mem_id;
												//echo $frm_mem_id;
$sql = $this->db->prepare("SELECT frm_mem_id FROM introduce_card where mem_id = :sfrmmemid");
								}catch(Exception $e){
												die($e->getMessage());
								}
								$sql->bindParam(':sfrmmemid',$frm_mem_id);
								$sql->execute();
								$row_count_data =$sql->rowCount();
								while($row = $sql->fetch()) {
												$frm = $row['frm_mem_id'];
								}
							//対となる紹介所レコードがない場合、追加
							if(!$row_count_data > 0){
										
										$sql = $this->db->prepare("insert into introduce_card values(null,".$frm_mem_id.",".$mem_id.",now())");
								$tt = $sql->execute();
								}

								while($row = $sql->fetch()) {
												//$id = $row['MemId'];
				        }				
								unset($list);
								return $this->intro_detail;
				}






}
