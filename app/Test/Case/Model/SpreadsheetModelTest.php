<?php
App::uses('SpreadsheetModel', 'Model');

/**
 * SpreadsheetModel Test Case
 *
 */
class SpreadsheetModelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.spreadsheet_model',
		'app.party',
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
		$this->SpreadsheetModel = ClassRegistry::init('SpreadsheetModel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SpreadsheetModel);

		parent::tearDown();
	}

}
