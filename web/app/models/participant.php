<?php
class Participant extends AppModel {
	var $name = 'Participant';
	var $validate = array(
		'event_seat_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'user_id' => array(
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
		'EventSeat' => array(
			'className' => 'EventSeat',
			'foreignKey' => 'event_seat_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        
        function addParticipant($eventId,$userId,$seatTypeId=1){
            
            $conditions = array('event_id'=>$eventId,'user_id'=>$userId);
            
            if($this->field('id',$conditions)){
                return true;
            }
            
            $data = array('event_id'=>$eventId,'user_id'=>$userId,'event_seat_id'=>$seatTypeId);
            
            $this->create($data);
            
            $this->save($data);
            
            return $this->id;
            
            
        } 
        
        function getUserEvents($userId){
            
            
            return $this->find('all',array('conditions'=>array('Participant.user_id'=>$userId)));
        }
        
}
?>