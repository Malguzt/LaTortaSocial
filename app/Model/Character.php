<?php

App::uses('AppModel', 'Model');

/**
 * Character Model
 *
 * @property Party $Party
 * @property User $User
 * @property Post $Post
 * @property Scene $Scene
 */
class Character extends AppModel {

  /**
   * Display field
   *
   * @var string
   */
  public $displayField = 'name';
  public $actsAs = array('Acl' => array('type' => 'controlled'));

  /**
   * Validation rules
   *
   * @var array
   */
  public $validate = array(
      'name' => array(
          'notempty' => array(
              'rule' => array('notempty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
      ),
      'party_id' => array(
          'uuid' => array(
              'rule' => array('uuid'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
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
      'Party' => array(
          'className' => 'Party',
          'foreignKey' => 'party_id',
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
      'Post' => array(
          'className' => 'Post',
          'foreignKey' => 'character_id',
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

  /**
   * hasAndBelongsToMany associations
   *
   * @var array
   */
  public $hasAndBelongsToMany = array(
      'Scene' => array(
          'className' => 'Scene',
          'joinTable' => 'characters_scenes',
          'foreignKey' => 'character_id',
          'associationForeignKey' => 'scene_id',
          'unique' => 'keepExisting',
          'conditions' => '',
          'fields' => '',
          'order' => '',
          'limit' => '',
          'offset' => '',
          'finderQuery' => '',
          'deleteQuery' => '',
          'insertQuery' => ''
      )
  );

  function parentNode() {
    if (!$this->id && empty($this->data)) {
      return null;
    }
    $data = $this->data;
    if (empty($this->data)) {
      $data = $this->read();
    }
    if (!$data['Character']['party_id']) {
      return null;
    } else {
      return array('Party' => array('id' => $data['Character']['party_id']));
    }
  }

}
