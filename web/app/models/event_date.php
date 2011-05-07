<?php
class EventDate extends AppModel {
	var $name = 'EventDate';
	var $validate = array(
		'event_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        
        function updateDates($eventId,$dateData){
            
            $eventDateId = $this->field('EventDate.id',array('event_id'=>$eventId));
            if(!$eventDateId ){
                $dateData['event_id'];
                $this->create($dateData);
                $this->save($dateData);
                return;
            }
            
            
            $this->id = $eventDateId ;
            return $this->save($dateData);
            
        }
}
?>