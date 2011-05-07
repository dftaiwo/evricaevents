<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class EvriventsController extends AppController {

    public $name = 'Evrivents';
    public $uses = array('Event');


    function index(){

        $allEvents = $this->Event->find('all');
        $this->set('allEvents',$allEvents);

    }


    function viewEvent($eventId=0){

        $eventInfo = $this->Event->getEvent($eventId);

        pr($eventInfo);

        exit;

    }


}

