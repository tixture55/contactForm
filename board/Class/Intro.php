
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
<link rel="stylesheet" href="../acc.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="./script.js"></script>
<script type="text/javascript" src="./cross.js"></script>

<script>
$(function() {
								$( "#accordion" ).accordion({
collapsible: true
});
								});
</script>
</head>
<body>
<h2>紹介者情報</h2>




<?php
session_start();

require_once('FacadeMemberLogic.php');
class Intro
{
				protected $intro_num;
				protected $board_num;
				protected $post_id;
				protected $list;
				protected $intro_list;


				private static $instance = null;

				//インスタンスを取得するメソッドを追加
				public static function getInstance(){
								if (is_null(self::$instance)){
												self::$instance = new Intro();
								}
								//インスタンスを返却する
								return self::$instance;

				}

				public function facadeLogic($post_id){
                
								$this->post_id = $post_id;
								$result_search = FacadeMemberLogic::getInstance();
								//post_idから紹介者の詳細情報を取得する
								$this->list = $result_search->postSearch($this->post_id);
								//発行されている紹介書を取得する
								$this->intro_list = $result_search->postSearch($_SESSION['MEMID']);
								echo $_SESSION['MEMID'];
				}
				public function renderfunc(){

								echo '<div id="accordion">';
								echo '<h3>基本情報</h3>';
								echo '<div>';
								echo '<p>';
								if(isset($this->intro_list)){
							  //var_dump($this->intro_list);
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
												echo '<a href=./Intro.php?no='.$this->value['SID'].'>'.$this->value['SID'].'</a>';
												echo '</td>';
												echo '<td>';

												echo $this->value['age']; 

												echo '</td>';
												echo '<td>';
												echo $this->value['hobby']; 
												echo '</td>';
												echo '<td>';
												echo $this->value['area']; 
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
								echo '<h3>詳細情報</h3>';
								echo '<div>';
								echo '<p>';
								echo 'セクション2のコンテンツ領域です。';
								echo '</p>';
								echo '</div>';
								echo '<h3>メッセージ</h3>';
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
$post_id= htmlspecialchars($_REQUEST['no']);

$intro= Intro::getInstance();
$intro->facadeLogic($post_id);
$intro->renderfunc();

