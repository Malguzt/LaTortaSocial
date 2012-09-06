<?php

App::uses('AppModel', 'Model');

/**
 * Post Model
 *
 * @property Scene $Scene
 * @property Character $Character
 */
class Post extends AppModel {

  /**
   * Display field
   *
   * @var string
   */
  public $displayField = 'narration';
  public $actsAs = array('Acl' => array('type' => 'controlled'));

  /**
   * Validation rules
   *
   * @var array
   */
  public $validate = array(
      'narration' => array(
          'notempty' => array(
              'rule' => array('notempty'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
      ),
      'scene_id' => array(
          'uuid' => array(
              'rule' => array('uuid'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
      ),
      'character_id' => array(
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
      'Scene' => array(
          'className' => 'Scene',
          'foreignKey' => 'scene_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      ),
      'Character' => array(
          'className' => 'Character',
          'foreignKey' => 'character_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      )
  );

}
