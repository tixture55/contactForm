<?php

	class Auth extends AppModel
	{
			var $name = 'Auth';
			var $hasOne = array('Customer' =>
											array('className' => 'Customer',
														'conditions' =>'',
														'order' => '',
														'dependent' => true,
														'foreignKey' => 'auth_id'
														)
											);
	}
