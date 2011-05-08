<?php
class Event extends AppModel {
//        public $recursive = 0;
	var $name = 'Event';
        var $actsAs = array('Sluggable'=>array('slug'=>'event_slug','overwrite'=>true));
	var $validate = array(
		'state_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => 'notEmpty',
		'description' => 'notEmpty',
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
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
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
	var $hasOne = array(
		'EvDate' => array(
			'className' => 'EventDate',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

	var $hasMany = array(
		'EventDate' => array(
			'className' => 'EventDate',
			'foreignKey' => 'event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventImage' => array(
			'className' => 'EventImage',
			'foreignKey' => 'event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventSeat' => array(
			'className' => 'EventSeat',
			'foreignKey' => 'event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EventSpeaker' => array(
			'className' => 'EventSpeaker',
			'foreignKey' => 'event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Participant' => array(
			'className' => 'Participant',
			'foreignKey' => 'event_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	var $hasAndBelongsToMany = array(
		'Category' => array(
			'className' => 'Category',
			'joinTable' => 'events_categories',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'category_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'events_tags',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'tag_id',
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

        function getEvent( $eventId){
            
            $conditions = array('Event.id'=>$eventId);
            
            return $this->find('first',array('conditions'=>$conditions));
            
            
        }
        function getUserEvent($userId,$eventId){

            $conditions = array('user_id'=>$userId,'Event.id'=>$eventId);

            return $this->find('first',array('conditions'=>$conditions));


        }
        function getUserEvents($userId ){
            
            $conditions = array('user_id'=>$userId);
            
            return $this->find('all',array('conditions'=>$conditions));
            
            
        }

        function getRandomEvents(){

            return $this->find('all',array('order'=>array('EvDate.start_date'=>'DESC'),'limit'=>5));

        }
        
        
        function createSlug($string){
            
            $string = low($string);
            $string = preg_replace('/[^a-z0-9_]/i', $settings['separator'], $string);
            $string = preg_replace('/' . preg_quote($settings['separator']) . '[' . preg_quote($settings['separator']) . ']*/', $settings['separator'], $string);
            
            $conditions = array('event_slug'=>$string);
            if($this->id){
                
                
                $conditions[]="Event.id <> {$this->id}";
                
                
            }
            
            if(!$this->field('id',$conditions)){
                
                return $string;
                
            }
            
            for($i=0;$i< 100000;$i++){
                $testString = $string.'_'.$i;
                $conditions['event_slug'] = $testString;
                if(!$this->field('id',$conditions)){
                
                   return $testString;
                
                }
                
                
            }
            
            return $this->id;
        }
        
        function save($data){
            
            if(isset($data['Event'])){
                $data['Event']['event_slug'] = $this->createSlug($data['Event']['event_slug']);
            }else{
                
            }
            parent::save($data);
        }
}
?>