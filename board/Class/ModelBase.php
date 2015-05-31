<?php

class ModelBase{

				protected $db;
				protected $name;

				public function __construct(){
								$this->initDb();
				}

				public function initDb(){
								try{
									$dsn = sprintf(
									  'mysql:host=%s;dbname=%s;charset=utf8;port=3306;',
									  'localhost',
									  'data1');
								    $this->db = new PDO($dsn,'root', 'xg23y91a');
										
						
			         	}catch(PDOException $e){
										echo $e->getMessage();
								}
        }
				public static function setConnectionInfo($connInfo)
				{
								self::$connInfo = $connInfo;
        }
								public function query($name){

								}
}
