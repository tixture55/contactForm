<?php
		require_once('ModelBase.php');
		
		class FacadeBalanceTable extends ModelBase{
		
				protected $name;
        protected $list;

				public function getList($id){
						if(isset($id) && $id !=''){

//$sql = $this->db->prepare("SELECT * FROM Customer left join Teletype on Customer.Telephone = Teletype.telephone left join board_status on Customer.SID = board_status.UserID WHERE SID=:sid order by Customer.SID limit 50");
$sql = $this->db->prepare("SELECT * FROM AccountMoney WHERE SID=:sid");

						}else{
							$sql = $this->db->prepare("SELECT * FROM Customer where Customer.SID = 10 limit 50");
							
						}
						$sql->bindParam(':sid',$id);
						$sql->execute();
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
								}else{
										$list[] = array('ID'=>$id, 'LASTNAME'=>$lastname, 'FNAME'=>$firstname, 'TELE'=>$tele, 'JOB'=>$job, 'TYPE'=>'-'); 

								}
						}
						$this->list = $list;
						return $this->list;
				}






		}
