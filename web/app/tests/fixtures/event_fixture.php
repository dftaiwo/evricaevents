<?php
/* Event Fixture generated on: 2011-05-07 12:17:59 : 1304767079 */
class EventFixture extends CakeTestFixture {
	var $name = 'Event';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'event_slug' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_free' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'is_private' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3),
		'total_seats' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gps_coords' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'event_url' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'event_logo_url' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'event_company' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'event_company_info' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'theme_title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'theme_background' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'theme_body' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'theme_links' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'events_FKIndex1' => array('column' => 'user_id', 'unique' => 0), 'events_FKIndex2' => array('column' => 'state_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'state_id' => 1,
			'user_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'event_slug' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'is_free' => 1,
			'is_private' => 1,
			'total_seats' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'gps_coords' => 'Lorem ipsum dolor sit amet',
			'event_url' => 'Lorem ipsum dolor sit amet',
			'event_logo_url' => 1,
			'event_company' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'event_company_info' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'theme_title' => 'Lore',
			'theme_background' => 'Lore',
			'theme_body' => 'Lore',
			'theme_links' => 'Lore',
			'created' => '2011-05-07 12:17:59',
			'modified' => '2011-05-07 12:17:59'
		),
	);
}
?>