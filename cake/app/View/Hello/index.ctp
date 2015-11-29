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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<?php echo $this->Html->script('script', array('inline' => false)); ?>
<script type="text/javascript" src="./script.js">
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
			'outputOtherAccount',
			'index'
		
		)),
		
		),
		array())) 
		. PHP_EOL;
echo '</table>';

echo $this->Form->create('hello', array('action' => 'add','method' => 'post'));
echo $this->Form->input(
		'username',
		array('label' => 'Username')
		);
echo $this->Form->end('会員検索');

?>
</p>
</body>
</html>

