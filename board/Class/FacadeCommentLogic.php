<?php
class FacadeCommentLogic{

		protected comment;

		public function insertIntroComment($posted_com){
				
        $intro_com = new FacadeIntroCommentTable();
				$ins_intro_com->insert($posted_com);

		}
		public function selectIntroComment(){
				
        $intro_com = new FacadeIntroCommentTable();
				return $ins_intro_com->select();
				
		}



}
