<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Group $Group
 */
class User extends AppModel {

  /**
   * Display field
   *
   * @var string
   */
  public $displayField = 'username';
  public $name = 'User';
  
  public $validate = array(
      'username' => array(
          'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'A username is required'
          )
      ),
      'password' => array(
          'required' => array(
              'rule' => array('notEmpty'),
              'message' => 'A password is required'
          )
      )
  );

  //The Associations below have been created with all possible keys, those that are not needed can be removed

  /**
   * belongsTo associations
   *
   * @var array
   */
  public $belongsTo = array(
      'Group' => array(
          'className' => 'Group',
          'foreignKey' => 'group_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      )
  );

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
  }

}
