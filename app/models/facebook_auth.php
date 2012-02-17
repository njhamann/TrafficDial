<?php
class FacebookAuth extends AppModel {
	var $name = 'FacebookAuth';
	var $displayField = 'email';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ClientService' => array(
			'className' => 'ClientService',
			'foreignKey' => 'client_service_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
