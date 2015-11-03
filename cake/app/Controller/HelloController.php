<?php
/**
 * /app/Controller/HelloController.php
 */
session_start();
require_once('FacadeBookResearchLogicController.php');
class HelloController extends AppController
{
	/** ビュー未使用 */
	public $autoRender = false;
	public $name;  // 商品名
	public $list;  // 本情報
	public $value;  // 本情報


public function index(){
$this->render('/hello/test');
		$this->name = $book_name;

		//DB検索ロジックに値を渡す
		$result_search = new FacadeBookResearchLogicController();
		//facadeにほんの名前をセット
		$this->list = $result_search->customerSearch($this->name);
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>';
		echo 'Customer';
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
		echo '<td>';
		echo '職業';
		echo '</td>';
		echo '<td>';
		echo '電話種別';
		echo '</td>';
		echo '<td>';
		echo '</td>';
		echo '</tr>';

		foreach ($this->list as $this->value) { 
			echo '<tr>';
			echo '<td>';
			echo '<a href=./Mypage.php?no='.$this->value['ID'].'>'.$this->value['ID'].'</a>';    
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
			echo '<td>';
			echo $this->value['JOB']; 
			echo '</td>';

			echo '<td>';
			echo $this->value['TYPE']; 
			echo '</td>';
			echo '</tr>';
		}
		unset($this->list);

		echo '</table>';
	}
public function add(){
  echo $this->data["form1"];
}
}
// インスタンス生成
$product= new HelloController();
if(isset($_POST['book'])){
	$book_name = $_POST['book'];
	$_SESSION['flg'] ="ok";
	// 商品名を設定
	$product->index($book_name);
}
