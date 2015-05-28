<?php
$memcache = new Memcache;
$memcache->addServer("localhost", 11211);
$memcache->flush();
for ($i = 0; $i < 100000; $i++) {
  $memcache->set(md5($i), crc32($i), 0, 36000);
	}
