<?php
App::uses('Party', 'Model');

/**
 * Party Test Case
 *
 */
class PartyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.party',
		'app.spreadsheet_model',
		'app.user',
		'app.group',
		'app.character',
		'app.post',
		'app.scene',
		'app.characters_scene'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Party = ClassRegistry::init('Party');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Party);

		parent::tearDown();
	}

}
