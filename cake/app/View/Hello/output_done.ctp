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
<?php
if(isset($flg) && $flg == 1){
	echo '残金が足りなかったため出金できませんでした。';}
	else{
		echo $plice.'円の出金を実行しました';
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
				'action' => 'index',
         $id
				)),

		),
		array())) 
	. PHP_EOL;

	?>
	</body>
	</html>

