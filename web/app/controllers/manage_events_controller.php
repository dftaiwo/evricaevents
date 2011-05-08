<?php

/*
 * The controller to handle the management of events by a user from creating the event 
 * to adding the pictures after the event ends
 * and open the template in the editor.
 */

class ManageEventsController extends AppController {

    public $name = 'ManageEvents';
    public $helpers = array('Html', 'Form');
    public $uses = array('Event');
    public $components = array('Upload','Session');
    public $_userId = 0;

    function  beforeFilter() {


        parent::beforeFilter();

        $user  = $this->Session->read('user');
        if(!$user){

            $this->Session->setFlash("Please login to access this area");
            
            $this->redirect('/users/add');        
            
        }
            
            $this->_userId = $user['User']['id'];

    }

    function index() {



        $myEvents = $this->Event->getUserEvents($this->_userId);
        $this->set('myEvents', $myEvents);
    }

    function createEvent() {


        $states = $this->Event->State->find('list');
        $users = $this->Event->User->find('list');
        $countries = $this->Event->State->Country->find('list');
        $categories = $this->Event->Category->getMainCategories();
        $tags = $this->Event->Tag->find('list');
        $this->set(compact('states', 'users', 'categories', 'tags', 'countries'));

        if (!empty($this->data)) {

            $this->data['Event']['user_id'] = $this->_userId;
            $this->Event->create();

            if ($this->Event->save($this->data)) {
                $eventId = $this->Event->id;
                $file = $this->data['Event']['event_logo'];

                if (!$file['error']) {
                    $file['name'] = "{$eventId}_logo.jpg";
                    // set the upload destination folder
                    $destination = WWW_ROOT . "uploads/logos/";



                    // upload the image using the upload component
                    $result = $this->Upload->upload($file, $destination, null, array('type' => 'resizecrop', 'size' => array('300', '400'), 'output' => 'jpg'));

                    if (!$result) {
                        $photoData  =array('id'=>$eventId, 'event_logo_url'=> $this->Upload->result);
                        $this->Event->save($photoData);
                    } else {
                        // display error
                        $errors = $this->Upload->errors;

                        // piece together errors
                        if (is_array($errors)) {
                            $errors = implode("<br />", $errors);
                        }
                        $this->Session->setFlash($errors);
                    }
                }


                $eventId = $this->Event->id;
                $startDateData = $this->data['EventDate']['start_date'];
                $endDateData = $this->data['EventDate']['end_date'];

                $dateData = array(
                    'event_id' => $eventId,
                    'start_date' => $startDateData,
                    'end_date' => $endDateData
                );
                $this->Event->EventDate->create($dateData);
                $this->Event->EventDate->save($dateData);

                $this->Session->setFlash(__('The event has been saved', true));
                $this->redirect(array('action' => "viewEvent/$eventId"));
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
            }
        }
    }

    function _getEvent($eventId) {


        $eventInfo = $this->Event->getUserEvent($this->_userId, $eventId);

        if (!$eventInfo) {

            $this->Session->setFlash('Unable to find this event!');
            $this->redirect('index');
        }
        $this->set('eventInfo', $eventInfo);
        $this->set('eventId', $eventId);
        return $eventInfo;
    }

    function advEvent($eventId=0) {

        $eventInfo = $this->_getEvent($eventId);
    }

    function viewEvent($eventId=0) {


        $eventInfo = $this->_getEvent($eventId);
    }

    function editEvent($eventId=0) {

        $states = $this->Event->State->find('list');
        $users = $this->Event->User->find('list');
        $countries = $this->Event->State->Country->find('list');
        $categories = $this->Event->Category->getMainCategories();
        $tags = $this->Event->Tag->find('list');
        $this->set(compact('states', 'users', 'categories', 'tags', 'countries', 'eventId'));

        $eventInfo = $this->_getEvent($eventId);

        if (!empty($this->data)) {


            // grab the file
            $file = $this->data['Event']['event_logo'];

            if (!$file['error']) {
                $file['name'] = "{$eventId}_logo.jpg";
                // set the upload destination folder
                $destination = WWW_ROOT . "uploads/logos/";



                // upload the image using the upload component
                $result = $this->Upload->upload($file, $destination, null, array('type' => 'resizecrop', 'size' => array('300', '400'), 'output' => 'jpg'));

                if (!$result) {
                    $this->data['Event']['event_logo_url'] = $this->Upload->result;
                } else {
                    // display error
                    $errors = $this->Upload->errors;

                    // piece together errors
                    if (is_array($errors)) {
                        $errors = implode("<br />", $errors);
                    }
                    $this->Session->setFlash($errors);
                }
            }

//            $name = $this->data['Event']['name'];

            
            $this->Event->id = $eventId;
            $this->data['Event']['id'] = $eventId;
            if ($this->Event->save($this->data)) {

                $startDateData = $this->data['EventDate']['start_date'];
                $endDateData = $this->data['EventDate']['end_date'];

                $startDate = "{$startDateData['year']}-{$startDateData['month']}-{$startDateData['day']}";
                $endDate = "{$endDateData['year']}-{$endDateData['month']}-{$endDateData['day']}";

                 $dateData = array(
                    'event_id' => $eventId,
                    'start_date' => $startDateData,
                    'end_date' => $endDateData
                );

                $this->Event->EventDate->updateDates($eventId, $dateData);

                $this->Session->setFlash(__('The event has been saved', true));
                $this->redirect(array('action' => "viewEvent/$eventId"));
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
            }
        } else {

            $this->data = $eventInfo;
            
            $this->data['EventDate'] = $eventInfo['EvDate'];
            
        }
    }
    
    function viewParticipants($eventId=0){
        
        $eventInfo = $this->_getEvent($eventId);

        $conditions = array('Participant.event_id'=>$eventId);
        $this->paginate['Participant']['conditions'] = $conditions;
        
        $participants = $this->paginate('Participant');
        
        $this->set('participants',$participants);
        
        
    }

}