<?php
App::uses('ReadersInformation', 'Model');

/**
 * ReadersInformation Test Case
 *
 */
class ReadersInformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.readers_information',
		'app.reader',
		'app.comment',
		'app.post',
		'app.user',
		'app.category',
		'app.page',
		'app.tag',
		'app.posts_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReadersInformation = ClassRegistry::init('ReadersInformation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReadersInformation);

		parent::tearDown();
	}

}
