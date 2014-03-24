<?php
App::uses('ReadersProfile', 'Model');

/**
 * ReadersProfile Test Case
 *
 */
class ReadersProfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.readers_profile',
		'app.reader',
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
		$this->ReadersProfile = ClassRegistry::init('ReadersProfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReadersProfile);

		parent::tearDown();
	}

}
