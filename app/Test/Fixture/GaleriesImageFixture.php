<?php
/**
 * GaleriesImageFixture
 *
 */
class GaleriesImageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'galery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'image_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_galeries_images_images1_idx' => array('column' => 'image_id', 'unique' => 0),
			'fk_galeries_images_galeries1_idx' => array('column' => 'galery_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'galery_id' => 1,
			'image_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet'
		),
	);

}
