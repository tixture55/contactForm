
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!--
<meta http-equiv="content-type" content="application/json; charset=UTF-8">
-->
<style type="text/css">
<!--
body {
				background-color: #CC99CC;
}
-->
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="acc.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="./script.js"></script>

<script>
$(function() {
								$( "#accordion" ).accordion({
collapsible: true
});
								});
</script>
</head>






<div id="modal">
<h1>my page</h1>
<ul id= "list__block" class="list__block">
<li class="boo"><a href="http://www.yahoo.co.jp/">紹介書</a></li>
<li><a href="https://www.google.co.jp">イントロG</a></li>
<li class="test"><a href="https://www.facebook.com/">登録情報</a></li>
<li><a href="https://twitter.com/">掲示板</a></li>
</ul>
</div>


<div id="two">
<ul id= "list__block" class="list__block">
<li class="boo"><a href="http://www.yahoo.co.jp/">紹介書</a></li>
<li><a href="https://www.google.co.jp">イントロG</a></li>
<li class="test"><a href="https://www.facebook.com/">登録情報</a></li>
<li><a href="https://twitter.com/">掲示板</a></li>
</ul>
</div>


<button id==".selecter">CLICK</button>
<form id="form" action="./ajax/test.php" method="POST">
<textarea name="text"></textarea>
<input type="submit" value="送信する">
</form>

<?php
require_once('FacadeMemberLogic.php');
class Mypage
{
				protected $intro_num;
				protected $board_num;
				protected $mem_id;
				protected $list;
				protected $intro_list;


				private static $instance = null;

				//インスタンスを取得するメソッドを追加
				public static function getInstance(){
								if (is_null(self::$instance)){
												self::$instance = new Mypage();
								}
								//インスタンスを返却する
								return self::$instance;

				}

				public function facadeLogic($mem_id){

								$this->mem_id = $mem_id;
								$result_search = FacadeMemberLogic::getInstance();
								//性別を取得する
								$this->list = $result_search->customerSearch($this->mem_id);
								//発行されている紹介書を取得する
								$this->intro_list = $result_search->introCardSearch($this->mem_id);
				}
				public function renderfunc(){

								echo '<div id="accordion">';
								echo '<h3>紹介書</h3>';
								echo '<div>';
								echo '<p>';
								if(isset($this->intro_list)){
								
								echo '<table border="1">';			
								
								echo '<tr>';
								echo '<td>';
								echo 'ご紹介番号';
								echo '</td>';
								echo '<td>';
								echo 'あなたのID';
								echo '</td>';
								echo '<td>';
								echo 'ご紹介させていただく方のID';
								echo '</td>';
								echo '<td>';

								echo 'ご紹介日時';
								echo '</td>';
								echo '</tr>';
								foreach ($this->intro_list as $this->value) { 
												echo '<tr>';
												echo '<td>';
												echo '<a href=./Intro.php?no='.$this->value['ID'].'>'.$this->value['ID'].'</a>';
												echo '</td>';
												echo '<td>';

												echo $this->value['MEM_ID']; 

												echo '</td>';
												echo '<td>';
												echo $this->value['FRM']; 
												echo '</td>';
												echo '<td>';
												echo $this->value['OCC_TIME']; 
												echo '</td>';
												echo '</tr>';
												
							
								}
								echo '</table>';
								}else{
										echo '現在紹介書はありません。';
								}
								//var_dump($this->intro_list);
								if(isset($intro_status)) echo $intro_status;
								echo '</p>';
								echo '</div>';
								echo '<h3>お話掲示板</h3>';
								echo '<div>';
								echo '<p>';
								echo 'セクション2のコンテンツ領域です。';
								echo '</p>';
								echo '</div>';
								echo '<h3>新着メッセージ</h3>';
								echo '<div>';
								echo '<p>';
								echo 'セクション3のコンテンツ領域です。';
								echo '</p>';
								echo '<ul>';
								echo '<li>リスト項目1</li>';
								echo '<li>リスト項目2</li>';
								echo '<li>リスト項目3</li>';
								echo '</ul>';
								echo '</div>';
				}


}
$member_num = htmlspecialchars($_REQUEST['no']);
//$_REQUEST['no']は26
$mypage = Mypage::getInstance();
//$member_numは26
$mypage->facadeLogic($member_num);
$mypage->renderfunc();

