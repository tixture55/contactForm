<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style type="text/css">
<!--
body {
	background-color: #CC99CC;
}
-->
</style>
<title>form</title>

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
<body>
</p>
<?php 

//print_r($balance);
$balance_money = array_pop($balance);

echo '<table border="1">';
echo $this->Html->tableCells(array(
			'口座残高','最終入出金日'
			));
echo $this->Html->tableCells(array(
			number_format($balance_money).'円','最終入出金日'
			));
echo '</table>';
echo '<table border="1">';
echo $this->Html->tableCells(array(
			array(
				$this->Html->link(
					'振込手続き',
					array(
						'outputOtherAccount',
						'index'
						)
					),
				$this->Html->link(
					'残高照会',
					array(
						'outputOtherAccount',
						'index'

						)),
				$this->Html->link(
					'出金処理',
					array(
						'controller' => 'outputOtherAccounts',
						'action' => 'index'

						)),

				),
				array())) 
	. PHP_EOL;
	echo '<div id="accordion">';
	echo '<h3>出金履歴</h3>';
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
		echo '現在出金履歴はありません。';
	}
if(isset($intro_status)) echo $intro_status;
echo '</p>';
echo '</div>';
echo '<h3>出金処理</h3>';
echo '<div>';
echo $this->Form->create('hello', array('action' => 'add','method' => 'post'));
echo $this->Form->input(
		'username',
		array('label' => '金額')
		);
echo $this->Form->input(
		'username',
		array('label' => '入金先銀行')
		);
echo $this->Form->input(
		'username',
		array('label' => '入金先口座番号')
		);
echo $this->Form->end('検索');
echo '<p>';
echo '</ul>';
echo '</div>';

echo '<h3>振込履歴</h3>';
echo '<div>';
echo '<p>';
echo 'セクション2のコンテンツ領域です。';
echo '</p>';
echo '<ul>';
echo '<li>リスト項目1</li>';
echo '<li>リスト項目2</li>';
echo '<li>リスト項目3</li>';
echo '</ul>';
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
/*
echo '</ul>';
echo '</div>';
*/
echo '</p>';
echo '</div>';
echo '</div>';
echo '</p>';

echo $this->Form->create('hello', array('action' => 'add','method' => 'post'));
echo $this->Form->input(
		'username',
		array('label' => '株価検索(銘柄もしくは株コードを入力)')
		);
echo $this->Form->end('検索');

?>
</p>
</body>
</html>

