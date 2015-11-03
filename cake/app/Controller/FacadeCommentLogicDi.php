<?php

require_once('FacadeIntroCommentTable.php');

interface FacadeCommentLogicDiInterface
{
	public function insertIntroComment($posted_com);
}



class FacadeCommentLogicDi implements FacadeCommentLogicDiInterface{

	public $facadeintable;

	public function __construct(FacadeIntroCommentTable $facadeintable){
       $this->facadeintable = $facadeintable;

	}

	public function insertIntroComment($posted_com){
		$this->facadeintable->insert($posted_com);


	}
}
