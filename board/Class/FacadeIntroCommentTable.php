
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<?php
session_start();

require_once('ModelBase.php');

class FacadeIntroCommentTable extends ModelBase{

				protected $list;
				protected $_id;

				public function select(){
								try{
												$to = $_SESSION['AITE'];
												$post_id = $_SESSION['no'];
												$sql = $this->db->prepare("SELECT * FROM comment_table where rcv_mem_id=:to or pst_mem_id=:to order by post_id desc limit 20");
								}catch(Exception $e){
												die($e->getMessage());
								}
								$sql->bindParam(':to',$to);
								$sql->execute();
								$row_count_data =$sql->rowCount();
								$flg = 0;
								while($row = $sql->fetch()) {
												$id = $row['post_id'];
												$rcv = $row['rcv_mem_id'];
												$pst= $row['pst_mem_id'];
												$comment = $row['comment'];
												$readed= $row['readed'];
												$post_time = $row['create_date'];
												//$b_comment = mb_convert_encoding($b_comment, "utf-8");

												$list[] = array('ID'=>$id, 'RCV'=>$rcv, 'PST'=>$pst, 'COM'=>$comment, 'READ'=>$readed, 'TIME'=>$post_time); 

								}
								//var_dump($list);
								$this->list = $list;
								unset($list);
								return $this->list;
				}
				public function insert($post_com){
								try{
												$to = $_SESSION['AITE'];
												$my = $_SESSION['my_id'];
												//var_dump($to);
												$sql_com_ins = $this->db->prepare("insert into comment_table values(null,".$to.",".$my.",'".$post_com."',0,now())");

												$sql_com_ins->execute();
								}catch(Exception $e){
												die($e->getMessage()); 
								}
				}





}
