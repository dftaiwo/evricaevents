<?php
//set_include_path(PEAR .PATH_SEPARATOR. get_include_path);
//ini_get("include_path") ;
 //get_include_path();
class AppController extends Controller
{
    var $helpers= array('Form','Html','Javascript','Time');
    var $components =array('Email','Auth','Session','RequestHandler');

    var $allowed = array('pages'=>'*');
    function beforeFilter()
    {


       $this->Auth->allow('display');
        $this->Auth->userModel='User';
        $this->Auth->authorize='actions';
        $this->Auth->authError='You must login to Access that area.';
        $this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'display');
     	$this->Auth->actionPath = 'controllers/';
     	//$this->Auth->userScope = array('User.confirmed' => true);
     	$this->Auth->allowedActions = array('display','index');
     	$this->Auth->autoRedirect = false;
        $this->Auth->loginAction=array('controller'=>'Users','action'=>'login');


       //$this->Auth->loginRedirect(array('controller'=>'dashboard','action'=>'index'));

         //$this->Auth->loginRedirect(array('controller'=>'dashboard','action'=>'index'));

        
    }

    function  beforeRender()
    {
     //  $this->Auth->allow('*')  ;
    }
}

?>
