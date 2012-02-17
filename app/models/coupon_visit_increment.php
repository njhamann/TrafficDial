<?php
class CouponVisitIncrement extends AppModel {
	var $name = 'CouponVisitIncrement';
	var $validate = array(
		'coupon_visit_count_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'count' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'CouponVisitCount' => array(
			'className' => 'CouponVisitCount',
			'foreignKey' => 'coupon_visit_count_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
