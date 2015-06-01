<!DOCTYPE html>
<html lang='ja'>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
<script type="text/javascript" src="./ajax/ballon.js"></script>
<script type="text/javascript" src="./ajax/ajax.js"></script>

<script>
$(document).ready(function() {
								$('#post_com').mouseover(function(){ //idにマウスオーバーしたら
																$(this).grumble({
text: '表示テキスト', 
angle: 85, //確度
distance: 60, //距離
showAfter: 500, //表示のタイミング
type: 'alt-', //水色にする場合
hasHideButton: true, //クリックで消去の場合
hideAfter: 200 //自動で消す（なしの場合はfalse）
});
																});
								});
$(function() {
								$( "#accordion" ).accordion({
collapsible: true,
autoHeight:false
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
								$this->intro_list = $result_search->postSearch($_REQUEST['no']);
				}
				public function renderfunc(){
								
								$_REQUEST['no'] = $_SESSION['no'];
								if(isset($_SESSION['flg_intro']) && password_verify($_SESSION['no'],$_SESSION['flg_intro'])){
												echo '<div id="accordion">';
												echo '<h3>基本情報</h3>';
												echo '<div>';
												echo '<p>';
												if(isset($this->intro_list)){

																echo '<table border="1">';			

																echo '<tr>';
																echo '<td>';
																echo 'ご紹介番号';
																echo '</td>';
																echo '<td>';
																echo 'ご紹介させていただく方のメンバーID';
																echo '</td>';
																echo '<td>';
																echo '年齢';

																echo '</td>';
																echo '<td>';
																echo '趣味';

																echo '</td>';
																echo '<td>';
																echo '都道府県';

																echo '</td>';
																echo '<td>';

																echo 'ご紹介日時';
																echo '</td>';
																echo '</tr>';
																foreach ($this->intro_list as $this->value) { 

																				$_SESSION['no'] = $_REQUEST['no'];
																				$_SESSION['AITE'] = $this->value['ID']; 
																				echo '<tr>';
																				echo '<td>';
																				echo $_REQUEST['no'];
																				echo '</td>';
																				echo '<td>';
																				echo $this->value['ID']; 
																				echo '</td>';
																				echo '<td>';
																				echo $this->value['AGE']; 
																				echo '</td>';
																				echo '<td>';
																				echo $this->value['HOBBY']; 
																				echo '</td>';
																				echo '<td>';
																				echo $this->value['AREA']; 
																				echo '</td>';
																				echo '<td>';
																				echo $this->value['TIME']; 
																				echo '</td>';
																				echo '</tr>';

																}
																echo '</table>';
																echo '<br>';
																echo '<div id="area">';
																echo 'この人にメッセージを送る';

																echo '<form id="form" action="./ajax/AjaxIntroCard.php" method="POST">';
																echo '<textarea name="text"></textarea>';
																echo '<input type="submit" value="送信する">';
																echo '</form>';
																echo '</div>';
																echo '<div id="post_com">';
																echo '</div>';


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
}
$post_id= htmlspecialchars($_REQUEST['no']);

$intro= Intro::getInstance();
$intro->facadeLogic($post_id);
$intro->renderfunc();

