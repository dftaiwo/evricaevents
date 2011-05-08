<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class EvriventsController extends AppController {

    public $name = 'Evrivents';
    public $uses = array('Event','User','Participant');


    function index(){

        $allEvents = $this->Event->find('all');
        $this->set('allEvents',$allEvents);

    }


    
    function _getEvent($eventId=0){
        $eventInfo = $this->Event->getEvent($eventId);
        
        if(!$eventId || !$eventInfo){
            
            $this->Session->setFlash('Unable to find event');
            $this->redirect('index');
        }
        
        $this->set(compact('eventId','eventInfo'));
        
        return $eventInfo;
    
        
    }
    
    function viewEvent($eventId=0){

        $eventInfo = $this->_getEvent($eventId);
        
        
        
    }
    
    
    function register($eventId=0) {
        
        $eventInfo = $this->_getEvent($eventId);
          
        if(!empty($this->data)){
            
            $firstName = trim($this->data['Participant']['first_name']);
            $lastName = trim($this->data['Participant']['last_name']);
            $email = trim($this->data['Participant']['email']);
            
            $errors = array();
            if(!$email){
                $errors[]="Please provide your email address";
                
            }else{
                $validEmail = eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
                if(!$validEmail){
                      $errors[]="Please provide a valid email address";
  
                }
            }
            
            if(!$firstName){
                $errors[] = "Please provide your first name";
            }
            
            if(!$lastName){
                $errors[] = "Please provide your last name";
            }
            
            
            
            if($errors){
                
                $this->Session->setFlash(join('<br />',$errors));
                return;
            }
            
            $userData  = array('firstname'=>$firstName,'lastname'=>$lastName,'email'=>$email);
            
            $userId = $this->User->createGetUser($userData);
            
            if(!$userId){
                $this->Session->setFlash("An unexpected error occurred. Please try again later");
                return;
            }
            
            $this->Session->write('curUserId',null);

            $participationId = $this->Participant->addParticipant($eventId,$userId);
            
            if(is_bool($participationId)){
                if($participationId===true){
                    $this->Session->setFlash("This email address has already been registered for this event. If you want to track all your events, please click on register ");
                    return;
                }else{
                     $this->Session->setFlash("An unexpected error occurred. Please try again later");
                }
            }
            if(is_null($participationId)){
                 $this->Session->setFlash("An unexpected error occurred. Please try again later");
            }
            
            //else everything went well!
            
            //Send Email
            $userInfo = $this->User->getUser($userId);
            
            $this->set(compact('userInfo','eventInfo'));
            
            $this->Email->from = 'Evrica<evrica@evricaevents.com>';
            $this->Email->to = $email;
            $this->Email->subject = "Registered for {$eventInfo['Event']['name']} on Evrica";
            $this->Email->template = 'registered'; 
            $this->Email->sendAs = 'html';
            $this->Email->send();

            
            
            $this->Session->write('curUserId',$userId);
            $this->Session->setFlash("You have been registered for {$eventInfo['Event']['name']}!");
            $this->redirect("registered/$eventId");
            
        }
        
        //$this->User->getUserByEmail()

    }

    
    
    function registered($eventId=0){
        
        $this->_getEvent($eventId);
        
        $userId = $this->Session->read('curUserId');
        if(!$userId){
            $this->Session->setFlash("This session has expired!");
            $this->redirect("register/$eventId");

        }
        
        
        $this->set('userInfo',$this->User->getUser($userId));
        
    }


    
    function myEvents(){
        
        
        
    }
    
    function search(){
        $allEvents = array();
        $conditions = array();

        if(!empty($this->data)){
            
                $searchWords  = trim($this->data['Search']['search']);
            
                if($searchWords){
                    
                    $parts = explode(' ',$searchWords);
                    
                    
                    foreach($parts as $part){
                        $part = preg_replace('/[^a-zA-Z0-9]/','', $part);
                        $conditions[]= "(Event.name LIKE '%$part%' OR Event.description LIKE '%$part%' OR Event.event_company LIKE '%$part%' )";
                        
                    }
                    
                    
                }
                
        }
        $allEvents  = $this->Event->find('all',array('conditions'=>$conditions));
        $this->set('allEvents',$allEvents);

    }
}


