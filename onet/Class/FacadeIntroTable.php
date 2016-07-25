
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<?php


require_once('ModelBase.php');

class FacadeIntroTable extends ModelBase{

				protected $name;
				protected $list;
				protected $mem_id;

				public function getList($id){
								try{
											  $this->mem_id = $id;	
												$sql = $this->db->prepare("SELECT * FROM introduce_card where mem_id =".$this->mem_id." order by post_id limit 50");
								}catch(Exception $e){
												die($e->getMessage());
								}
								$sql->bindParam(':mem_id',$this->mem_id);
								$sql->execute();
								$row_count_data =$sql->rowCount();
								$flg = 0;
								while($row = $sql->fetch()) {
												$id = $row['post_id'];
												$id = intval($id);
												$mem_id = $row['mem_id'];
												$frm_id = $row['frm_mem_id'];
												$occ_time = $row['last_updated'];

												$list[] = array('ID'=>$id, 'MEM_ID'=>$mem_id, 'FRM'=>$frm_id, 'OCC_TIME'=>$occ_time); 

								}


								isset($list) ? $this->list = $list : NULL;
								unset($list);
								return $this->list;
				}






}
