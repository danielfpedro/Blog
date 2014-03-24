<?php
App::uses('Reader', 'Model');

/**
 * Reader Test Case
 *
 */
class ReaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reader',
		'app.readers_information',
		'app.comment',
		'app.post',
		'app.user',
		'app.users_role',
		'app.profile',
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
		$this->Reader = ClassRegistry::init('Reader');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reader);

		parent::tearDown();
	}

}
