<?php
/* Participant Fixture generated on: 2011-05-07 12:18:22 : 1304767102 */
class ParticipantFixture extends CakeTestFixture {
	var $name = 'Participant';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'event_seat_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'confirmed' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 3),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'participants_FKIndex1' => array('column' => 'user_id', 'unique' => 0), 'participants_FKIndex2' => array('column' => 'event_id', 'unique' => 0), 'participants_FKIndex3' => array('column' => 'event_seat_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'event_seat_id' => 1,
			'event_id' => 1,
			'user_id' => 1,
			'confirmed' => 1,
			'created' => '2011-05-07 12:18:22'
		),
	);
}
?>