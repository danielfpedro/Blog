<?php
App::uses('GaleriesImage', 'Model');

/**
 * GaleriesImage Test Case
 *
 */
class GaleriesImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.galeries_image',
		'app.galery',
		'app.image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GaleriesImage = ClassRegistry::init('GaleriesImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GaleriesImage);

		parent::tearDown();
	}

}
