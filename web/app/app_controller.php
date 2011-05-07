<?php
//set_include_path(PEAR .PATH_SEPARATOR. get_include_path);
//ini_get("include_path") ;
 //get_include_path();
class AppController extends Controller
{
    var $helpers= array('Form','Html','Javascript','Time');
    var $components =array('Email','Session','RequestHandler');

    var $allowed = array('pages'=>'*');
var $uses=array('User');


    var $helpers= array('Form','Html','Javascript','Time','Session');
    
 
    function beforeFilter()
    {


 
        
    }

    function  beforeRender()
    {
     
    }
}
