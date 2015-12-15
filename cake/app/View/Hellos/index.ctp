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
<script src="<?php echo $this->Html->url('/js/jquery-1.10.1.min.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo $this->Html->url('/js/jquery-ui-1.11.4/jquery-ui.css'); ?>">
<script src="<?php echo $this->Html->url('/js/jquery-ui-1.11.4/jquery-ui.js'); ?>"></script>
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

if(isset($balance)){
	$balance_last_modify = array_pop($balance);
	$balance_money = array_pop($balance);

	echo '<table border="1">';
	echo $this->Html->tableCells(array(
				'口座残高','最終入出金日時'
				));
	echo $this->Html->tableCells(array(
				number_format($balance_money).'円',$balance_last_modify
				
				));
echo '</table>';
}
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
echo $this->Form->hidden(
		'id' ,
		array('value' => $id)
		);
echo $this->Form->input(
		'hello.plice',
		array('label' => '金額')
		);
echo $this->Form->input(
		'hello.bank',
		array('label' => '入金先銀行')
		);
echo $this->Form->input(
		'hello.account',
		array('label' => '入金先口座番号')
		);
echo $this->Form->end('出金');
echo '<p>';
echo '</ul>';
echo '</div>';

echo '<h3>振込処理</h3>';
echo '<div>';
echo '<p>';
echo $this->Form->create('hello', array('action' => 'add','method' => 'post'));
echo $this->Form->hidden(
		'id' ,
		array('value' => $id)
		);
echo $this->Form->input(
		'transfer',
		array('label' => '金額')
		);
echo '</p>';
echo '<p>';
echo $this->Form->input(
		'trans_acc',
		array('label' => '入金先お客様ID')
		);
echo '</p>';
echo '<p>';
echo $this->Form->end('振込確認');
echo '</p>';
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

?>
</p>
</body>
</html>

