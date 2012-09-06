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
  public $actsAs = array('Acl' => array('type' => 'controlled'));


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
  
  public function parentNode() {
    if (!$this->id && empty($this->data)) {
      return null;
    }
    $data = $this->data;
    if (empty($this->data)) {
      $data = $this->read();
    }
    if (!$data['SpreadsheetModel']['party_id']) {
      return null;
    } else {
      return array('Group' => array('id' => $data['SpreadsheetModel']['party_id']));
    }
  }

}
