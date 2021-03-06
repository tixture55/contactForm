<?php
session_start();

require_once('ModelBase.php');

class FacadeIntroCommentTable extends ModelBase{

				protected $list;
				protected $_id;

				public function select(){
								try{
												$to = $_SESSION['AITE'];
												$to =(int)$to;
												$post_id = $_SESSION['no'];
												
												$sql = $this->db->prepare("SELECT * FROM comment_table where `rcv_mem_id` = ? or `pst_mem_id`= ? order by post_id desc limit 20");
								
								}catch(Exception $e){
												die($e->getMessage());
								}
								$sql->bindValue(1,$to, PDO::PARAM_INT);
								$sql->bindValue(2,$to, PDO::PARAM_INT);
								$tt = $sql->execute();
								$row_count_data =$sql->rowCount();
								$flg = 0;
								while($row = $sql->fetch()) {
												$id = $row['post_id'];
												$rcv = $row['rcv_mem_id'];
												$pst= $row['pst_mem_id'];
												$comment = $row['comment'];
												$readed= $row['readed'];
												$post_time = $row['create_date'];

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
				public function update_pict_proposal(){
								try{
												$to = $_SESSION['AITE'];
												$my = $_SESSION['my_id'];
												$sql_com_ins = $this->db->prepare("update proposal_status set `proposal`=1,`modified`=now() where `my_id`=".$my." and `aite_id`=".$to);

												$sql_com_ins->execute();
								}catch(Exception $e){
												die($e->getMessage()); 
								}
				}





}
