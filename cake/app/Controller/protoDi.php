<?php

require_once('FacadeBookInfoLogic.php');

// プロトタイプをinjectする
class C_c {
	private $configPrototype;

	function __construct(Config $prototype) {
		$this->configPrototype = $prototype;
	}

	function getConfig($filename) {
		$content = file_get_contents($filename);
		$config = clone $this->configPrototype;
		$config->setContent($content);
		return $config;
	}
}

//インスタンス化サンプル
$c = new C_c(new FacadeBookInfoLogic);
$config = $c->getConfig('foo.ini');
