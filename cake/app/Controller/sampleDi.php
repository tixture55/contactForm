<?php

// クラス名をinjectする
class C_b {
	private $configClass;

	function __construct($class='Config') {
		if (!is_string($class)) throw new InvalidArgumentException;
		if (!is_a($class, 'Config', true)) throw new InvalidArgumentException;
		$this->configClass = $class;
	}

	function getConfig($filename) {
		$content = file_get_contents($filename);
		return new $this->configClass($content);
	}
}

//インスタンス化サンプル
$c = new C_b('MockConfig');
$config = $c->getConfig('/etc/php5/php.ini');
