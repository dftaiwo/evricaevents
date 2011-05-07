<?php
class User extends AppModel {
	var $name = 'User';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'user_id',
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
		'Oauth' => array(
			'className' => 'Oauth',
			'foreignKey' => 'user_id',
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
//		'Participant' => array(
//			'className' => 'Participant',
//			'foreignKey' => 'user_id',
//			'dependent' => false,
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'exclusive' => '',
//			'finderQuery' => '',
//			'counterQuery' => ''
//		)
	);


        var $validate = array(
	  					
	  					'email'=>array(
                                                         'emailuniqueness'=>array(
                                                         'required'=>true,
	  						'rule'=>'isUnique',
	  						'message'=>'The Provided **EMAIL has already been used**',
                                                         'allowEmpty'=>false
                                                                              ),
                                                        'isemail'=>array(
                                                        'allowEmpty'=>false,
	  						'rule'=>'email',
	  						'message'=>'Please supply a valid email address**'
                                                                        )

                                                          ) ,
'firstname'=>array(
'required'=>true,
    'rule'=>'notEmpty',
	  						'allowEmpty'=>false,
	  						'message'=>'You have not supplied  a value Firstname field'
	  						),
      'lastname'=>array(
	  'required'=>true,
          'rule'=>'notEmpty',
	  						'allowEmpty'=>true,
	  						'message'=>'You have not supplied a value for Lastname field'
	  						)
     

	  					);




}
?>