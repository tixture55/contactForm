<?php
class Hello extends AppModel
{
	var $name = 'Hello';

	public $validate = array(
			'plice' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
				'alloEmpty' => false,
				'message' => '必ず入力して下さい'
				),
			'bank' => array(
				'required' => true,
				'alloEmpty' => false,
				'message' => '必ず入力して下さい'
				),
			'account' => array(
				'rule' => 'alphaNumeric',
				'rule'=> array('maxLength', 8),
				'rule'=> array('minLength', 8),
				'required' => true,
				'alloEmpty' => false,
				'message' => '口座番号を必ず入力して下さい'
				)
			);

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
