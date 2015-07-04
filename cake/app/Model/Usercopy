<?php
class User extends AppModel
{
	var $name = 'User';
	var $hasOne = array('Profile' =>
			array('className' => 'Profile',
				'conditions' => '',
				'order' => '',
				'exclusive' => false,
				'limit' => '1',
				'dependent' => true,
				'foreignKey' => 'user_id'
				)
			);
}
