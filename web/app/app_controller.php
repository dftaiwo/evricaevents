<?php
//set_include_path(PEAR .PATH_SEPARATOR. get_include_path);
//ini_get("include_path") ;
 //get_include_path();
class AppController extends Controller
{
    var $helpers= array('Form','Html','Javascript','Time','Session');
    
    function beforeFilter()
    {



 
        
    }

    function  beforeRender()
    {
     //  $this->Auth->allow('*')  ;
        
    }
}
