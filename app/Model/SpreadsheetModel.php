<?php
App::uses('AppModel', 'Model');
/**
 * SpreadsheetModel Model
 *
 * @property Party $Party
 */
class SpreadsheetModel extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Party' => array(
			'className' => 'Party',
			'foreignKey' => 'spreadsheet_model_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
