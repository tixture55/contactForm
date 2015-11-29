<?php
/**
 * /app/Controller/HellosController.php
 */
session_start();
require_once('FacadeBookResearchLogicController.php');
class HellosController extends AppController
{
	/** ビュー未使用 */
	public $autoRender = true;
	public $name = Hello;  // 商品名
	public $id;  //userID 
	public $list;  // 本情報
	public $value;  // 本情報

public function index($id){
//$this->render('/Hello/test');
		$this->id = $id;
    $this->name = $book_name;
		//DB検索ロジックに値を渡す
		$result_search = new FacadeBookResearchLogicController();
		//facadeにほんの名前をセット
		$this->list = $result_search->customerSearch($this->id,0);
		//残高を計算するためクラスのインスタンス変数を定義
		$result_search = new FacadeBookResearchLogicController();
		//DBで取得したいタイプの指定：(1:残高テーブルの値取得)
		$this->list_balance = $result_search->customerSearch($this->id,1);
		$this->set('balance',$this->list_balance);
		
		
		
		
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>';
		echo 'お客様ID';
		echo '</td>';
		echo '<td>';
		echo '姓';
		echo '</td>';
		echo '<td>';
		echo '名';
		echo '</td>';
		echo '<td>';
		echo '電話番号';
		echo '</td>';
		echo '</tr>';
    
		foreach ($this->list as $this->value) { 
		echo '<tr>';
			echo '<td>';
			echo $this->value['ID']; 
			echo '</td>';
			
			echo '<td>';
			echo $this->value['LASTNAME']; 
			echo '</td>';
			echo '<td>';
			echo $this->value['FNAME']; 
			echo '</td>';
			echo '<td>';
			echo $this->value['TELE']; 
			echo '</td>';

			echo '</tr>';
		}

		echo '</table>';
	}
public function add(){
	echo $this->data[hello][username];
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
