<?php
App::uses('Scene', 'Model');

/**
 * Scene Test Case
 *
 */
class SceneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scene',
		'app.party',
		'app.spreadsheet_model',
		'app.user',
		'app.group',
		'app.character',
		'app.post',
		'app.characters_scene'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Scene = ClassRegistry::init('Scene');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Scene);

		parent::tearDown();
	}

}
