<?php
/**
 * /app/Controller/HellosController.php
 */
require_once('FacadeBookResearchLogicController.php');
class HellosController extends AppController
{
	/** ビュー未使用 */
	public $autoRender = true;
	protected $id;  //userID 
	protected $trans_type;  //userID 
	protected $list;  // user情報
	public $value;  // 本情報
	public $uses = array('User');
  protected $fbrl;


	public function __construct($as = null, $r = null){
				$this->fbrl = new FacadeBookResearchLogicController();
		parent::__construct($as,$r);  // この処理を追加
	}

	public function index($id){
		$this->id = $id;
		
		//DB検索ロジックに値を渡す
		
		//facadeにほんの名前をセット
		$this->list = $this->fbrl->customerSearch($this->id,0);
		$this->set('list',$this->list);
		
		//DBで取得したいタイプの指定：(1:残高テーブルの値取得)
		$this->list_balance = $this->fbrl->customerSearch($this->id,1);
		
		$this->set('balance',$this->list_balance);
		$this->set('id',$this->id);




	}
	public function add(){

		//振込手数料の計算
		$tstrp = strpos(date(DATE_ATOM),'T');
		$now_time = mb_substr(date(DATE_ATOM),$tstrp + 1 ,2);
		if($now_time > 17 || $now_time < 9){
			$comission = 216;
		}else{
			$comission = 108;
		}

		$this->set('commission',$comission);
		$this->set('plice',$this->data['hello']['plice']);
		$this->set('id',$this->data['hello']['id']);
		$this->set('trans_status',$this->data['hello']['trans_status']);
	}
	public function output_done(){

		$this->id = $this->data['hello']['id'];
		$this->trans_type = $this->data['hello']['trans_status'];
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
		$this->set('trans_type',$this->trans_type);

	}
}
// インスタンス生成
if(isset($_POST['book'])){
	$book_name = $_POST['book'];
	$_SESSION['flg'] ="ok";
}
