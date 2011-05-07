<?php
/* EventsCategory Fixture generated on: 2011-05-07 12:18:03 : 1304767083 */
class EventsCategoryFixture extends CakeTestFixture {
	var $name = 'EventsCategory';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'events_categories_FKIndex1' => array('column' => 'event_id', 'unique' => 0), 'events_categories_FKIndex2' => array('column' => 'category_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'event_id' => 1
		),
	);
}
?>