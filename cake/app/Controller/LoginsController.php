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

public function index(){
$this->render('/login/login');
		$this->name = $book_name;

		//DB検索ロジックに値を渡す
		$result_search = new FacadeBookResearchLogicController();
		//facadeにほんの名前をセット

	}
public function auth(){
  $this->render('/login/login');
	if(isset($this->data['login']['username'])){
		//認証テーブルにアクセス
		$auth_search = new FacadeAuthLogicController();
    $auth_search->authCompare($this->data['login']['username']);
			return $this->redirect(array('controller' => 'hellos','action' => 'index'));	
		            array('controller' => 'hello', 'action' => 'index')
								        );*/
	}else{
		return $this->redirect(array('controller' => 'logins','action' => 'index'));	

	}
}
}
// インスタンス生成
//$product= new HellosController();
if(isset($_POST['book'])){
	$book_name = $_POST['book'];
	$_SESSION['flg'] ="ok";
	// 商品名を設定
	//$product->index($book_name);
}