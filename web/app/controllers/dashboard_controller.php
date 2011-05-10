<?php
class DashboardController extends AppController {

	var $name = 'Dashboard';
        var $uses=array('Participant');
        var $_userId = 0;
        
	function beforeFilter() {
            
            
            parent::beforeFilter();
            
             $user  = $this->Session->read('user');
            if(!$user){

                $this->Session->setFlash("Please login to access this area");
                $this->redirect('/users/add');
                
            }
            
            $this->_userId = $user['User']['id'];
            $this->set('userInfo',$user);
        }
        
        function index() {
	
            
            
	}
        
        function myEvents(){
            
            $myEvents = $this->Participant->getUserEvents($this->_userId);
            
            $this->set('myEvents',$myEvents);
        
            
        }
        
        

	 
}
?>