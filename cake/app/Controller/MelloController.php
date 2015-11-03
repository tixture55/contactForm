<?php
/**
 * /app/Controller/HelloController.php
 */
session_start();
require_once('FacadeBookResearchLogicController.php');
class MelloController extends AppController
{
	/** ビュー未使用 */
	public $autoRender = false;
	public $name;  // 商品名
	public $list;  // 本情報
	public $value;  // 本情報


	public function index(){
		$this->render('/hello/test');
		$this->name = $book_name;
		$this->loadModel('User');
		$data = $this->User->find('all');
/*		$data = $this->User->find('all',array(
					'fields' => array('Model.field1','Model.field2'), //取得するカラム。配列指定。
					'conditions' => array('Model.field' => $thisValue), //検索条件。カラムと値を連想配列で指定。
					'order' => array('Model.created', 'Model.field3 DESC'), //並び順。文字列または配列で指定。
					'group' => array('Model.field'), //group byするカラム。
					'limit' => 2, //limit句。数値で渡す。
					));
*/


		var_dump($data);
		echo '</p>';
		echo '</p>';
		echo '</p>';
		echo '</p>';
		var_dump(Hash::get($data, '0.Student.0.studentId')); 
		//DB検索ロジックに値を渡す
		$result_search = new FacadeBookResearchLogicController();
		//facadeにほんの名前をセット
		$this->list = $result_search->customerSearch($this->name);
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>';
		echo 'CustomerID';
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
		echo '掲示板開設';
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
	
		echo '<table border="1">';
		echo '<tr>';
		echo '<td>';
		echo 'CustomerID';
		echo '</td>';
		echo '<td>';
		echo 'student_id';
		echo '</td>';
		echo '<td>';
		echo '名';
		echo '</td>';
		echo '<td>';
		echo '性別';
		echo '</td>';
		echo '<td>';
		echo '卒業年月日';
		echo '</td>';
		echo '<td>';
		echo 'エリアID';
		echo '</td>';
		echo '<td>';
		echo 'blogのURL';
		echo '</td>';
		echo '</tr>';

		foreach ($data as $this->value) { 
			echo '<tr>';
			echo '<td>';
			echo '<a href=./Mypage.php?no='.$this->value['User']['id'].'>'.$this->value['User']['id'].'</a>';    
			echo '</td>';
			echo '<td>';

		  echo Hash::get($data, '0.Student.0.studentId'); 
			//echo $this->value['Student']['area_id']; 

			echo '</td>';
	  }
	}
	public function add(){
		echo $this->data["form1"];
	}
}
// インスタンス生成
$product= new MelloController();
if(isset($_POST['book'])){
	$book_name = $_POST['book'];
	$_SESSION['flg'] ="ok";
	// 商品名を設定
	$product->index($book_name);
}
