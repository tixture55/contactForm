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
echo $this->Form->create('hello', array('action' => 'output_done','method' => 'post'));
echo '<table border="1">';
echo '<tr>';
echo '<td>';
echo '出金元銀行';
echo '</td>';
echo '<td>';
echo '出金先銀行';
echo '</td>';
echo '<td>';
echo '金額';
echo '</td>';
echo '</tr>';

//foreach ($this->list as $this->value) { 
	echo '<tr>';
	echo '<td>';
	echo 'エイト銀行';
	echo '</td>';

	echo '<td>';
	echo 'ナイン銀行';
	echo '</td>';
	echo '<td>';
	echo number_format($plice).'円';
	echo '</td>';

	echo '</tr>';
//}   

echo '</table>';
echo $this->Form->end('出金実行');


?>
</body>
</html>

