<?php
class User extends AppModel
{
	var $name = 'User';
	var $hasMany = array('Profile' =>
			array('className' => 'Profile',
				'conditions' => '',
				'order' => '',
				'exclusive' => false,
				'limit' => '1',
				'dependent' => true,
				'foreignKey' => 'user_id'
				),
			'Student' =>
			array('className' => 'Student',
				'conditions' => '', 
				'order' => '', 
				'exclusive' => false,
				'dependent' => false,
				'foreignKey' => 'user_id'
				)

			);
}
