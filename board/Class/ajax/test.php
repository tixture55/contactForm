<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
	$a = $_POST['text'];
	header("Content-Type: text/plain; charset=UTF-8");
  print('いらっしゃいませ！');
	exit;
}

//Ajax時は真
