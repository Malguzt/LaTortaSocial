<?php

App::uses('AppModel', 'Model');

/**
 * Party Model
 *
 * @property SpreadsheetModel $SpreadsheetModel
 * @property User $User
 * @property Character $Character
 * @property Scene $Scene
 */
class Party extends AppModel {

  /**
   * Display field
   *
   * @var string
   */
  public $displayField = 'title';
  public $actsAs = array('Acl' => array('type' => 'controlled'));

  /**
   * Validation rules
   *
   * @var array
   */
  public $validate = array(
      'title' => array(
          'notempty' => array(
              'rule' => array('notempty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
      ),
      'spreadsheet_model_id' => array(
          'uuid' => array(
              'rule' => array('uuid'),
              //'message' => 'Your custom message here',
              'allowEmpty' => true,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
      ),
      'user_id' => array(
          'uuid' => array(
              'rule' => array('uuid'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
      ),
  );

  //The Associations below have been created with all possible keys, those that are not needed can be removed

  /**
   * belongsTo associations
   *
   * @var array
   */
  public $belongsTo = array(
      'SpreadsheetModel' => array(
          'className' => 'SpreadsheetModel',
          'foreignKey' => 'spreadsheet_model_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      ),
      'User' => array(
          'className' => 'User',
          'foreignKey' => 'user_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      )
  );

  /**
   * hasMany associations
   *
   * @var array
   */
  public $hasMany = array(
      'Character' => array(
          'className' => 'Character',
          'foreignKey' => 'party_id',
          'dependent' => false,
          'conditions' => '',
          'fields' => '',
          'order' => '',
          'limit' => '',
          'offset' => '',
          'exclusive' => '',
          'finderQuery' => '',
          'counterQuery' => ''
      ),
      'Scene' => array(
          'className' => 'Scene',
          'foreignKey' => 'party_id',
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

  public function parentNode() {
    return 'Parties';
  }

}