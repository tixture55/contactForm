<?php

require_once('FacadeIntroCommentTable.php');
class FacadeCommentLogic{

				protected $comment;

				public function insertIntroComment($posted_com){

								$intro_com = new FacadeIntroCommentTable();
								$intro_com->insert($posted_com);

				}
				public function updatePictProposal(){

								$intro_com = new FacadeIntroCommentTable();
								$intro_com->update_pict_proposal();

				}
				public function selectIntroComment(){

								$intro_com = new FacadeIntroCommentTable();
								return $intro_com->select();

				}



}
