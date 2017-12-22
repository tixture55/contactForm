<?php

App::uses('ModelBase', 'Controller');

class FacadeAuthCheckTable extends ModelBase{

	protected $name;
	protected $list;

	public function getList($user,$pass){
		if(isset($user) && $user !='' && isset($pass)){
			$sql = $this->db->prepare("SELECT id,SID,username FROM Auth where username=:user AND pass=:pass");

		}
		
		$sql->bindParam(':user',$user);
		$sql->bindParam(':pass',$pass);
		$sql->execute();
	
	  while($row = $sql->fetch()) {
			$id = $row['id'];
			$sid = $row['SID'];
			$name = $row['username'];
			$list = array('ID'=>$id, 'SID'=>$sid, 'NAME'=>$name); 

		}
		$this->list = $list;

		return $this->list;
	
	}
	
}
