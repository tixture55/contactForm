<?php
/**
 * /app/Controller/HellosController.php
 */
session_start();
require_once('FacadeBookResearchLogicController.php');
require_once('FacadeAuthLogicController.php');
class LoginsController extends AppController
{
	/** ビュー未使用 */
	public $autoRender = true;
	public $list;  // 本情報
	public $value;  // 本情報
	public $auth_info;  // 本情報

	public function index(){
		$this->render('/login/login');


	}
	public function auth(){
		$this->render('/login/login');

		if($this->data['login']['username'] !='' && $this->data['login']['password'] && isset($this->data['login']['username']) && isset($this->data['login']['password'])){

			//認証テーブルにアクセス
			$auth_search = new FacadeAuthLogicController();
			$this->auth_info = $auth_search->authCompare($this->data['login']['username'],$this->data['login']['password']);
			if(!empty($this->auth_info)){
				$id = array_shift($this->auth_info);
				return $this->redirect(array('controller' => 'hellos','action' => 'index', $id));	
			}else{
				return $this->redirect(array('controller' => 'logins','action' => 'index'));	

			}
		}else{
				return $this->redirect(array('controller' => 'logins','action' => 'index'));	

			}
	}
}
