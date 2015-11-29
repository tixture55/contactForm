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

