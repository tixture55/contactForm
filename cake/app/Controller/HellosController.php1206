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
  public $uses = array('User');


public function index($id){
		$this->Session->read('id');
    $this->Session->read('list_balance');
//$this->render('/Hello/test');
		$this->id = $id;
		//DB検索ロジックに値を渡す
		$result_search = new FacadeBookResearchLogicController();
		//facadeにほんの名前をセット
		$this->list = $result_search->customerSearch($this->id,0);
		//残高を計算するためクラスのインスタンス変数を定義
		$result_search = new FacadeBookResearchLogicController();
		//DBで取得したいタイプの指定：(1:残高テーブルの値取得)
		$this->list_balance = $result_search->customerSearch($this->id,1);
		$this->set('balance',$this->list_balance);
		$this->set('id',$this->id);
		
		
		
		
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
		
		//振込手数料の計算
		$tstrp = strpos(date(DATE_ATOM),'T');
		$now_time = mb_substr(date(DATE_ATOM),$tstrp + 1 ,2);
    if($now_time > 17 || $now_time < 9){
				$commission = 216;
		}else{
				$comission = 108;
		}

		$this->set('commission',$commission);
		$this->set('plice',$this->data['hello']['plice']);
		$this->set('id',$this->data['hello']['id']);
}
public function output_done(){
		
		$this->id = $this->data['hello']['id'];
		//DBで取得したいタイプの指定：(1:残高テーブルの値取得 2:残高テーブルの値更新)
		$result_search = new FacadeBookResearchLogicController();
		$tran_flg = $result_search->balanceUpdate($this->id,2,$this->data['hello']['plice'] + $this->data['hello']['commission']);
		$tran_flg = intval($tran_flg);
		if($tran_flg == 1){
			$this->set('flg',$tran_flg);
		}else{
			$this->set('plice',$this->data['hello']['plice']);
    }
			$this->set('id',$this->id);

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
