<?php
class Tag extends AppModel {
	var $name = 'Tag';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'events_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'event_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>