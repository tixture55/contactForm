<?php
$arr = array(0, 1, 2, 3, 4, 5);
$arr = array_filter($arr, function($var) {
    return $var % 2 === 0;
		});
		var_dump($arr);
