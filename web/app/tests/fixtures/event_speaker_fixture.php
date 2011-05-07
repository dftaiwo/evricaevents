<?php
/* EventSpeaker Fixture generated on: 2011-05-07 12:17:53 : 1304767073 */
class EventSpeakerFixture extends CakeTestFixture {
	var $name = 'EventSpeaker';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'profile' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sort_order' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 5),
		'created' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'modified' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'event_speakers_FKIndex1' => array('column' => 'event_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'event_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'profile' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'sort_order' => 1,
			'created' => 1,
			'modified' => 1
		),
	);
}
?>