<?php
class UsersController extends AppController {
 var $helpers= array('Form','Html','Javascript','Time', 'Session');
    var $components =array('Email','Session');

	var $name = 'Users';

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
            $this->layout='default';
            $this->Session->delete('user',$user);
		  if(!empty($this->data))
                         
                {
            $this->User->create();
            // $this->data['User']['lastlogin'] =date('Y-m-d:h:s:i');
            if($this->data['User']['pass']!=$this->data['User']['passV'])
                    {
                $this->Session->setFlash('Oops, Password Mismatch!');
                $this->redirect('/');
                exit;
                    }

                    $this->data['User']['password'] = md5($this->data['User']['passV']);
              
            if($this->User->save($this->data))
                    {




if(!empty($this->data['User']['email'])&&!empty($this->data['User']['firstname'])&&!empty($this->data['User']['lastname']))
{
$topattern='[;|,]';
$to=$this->data['User']['email'];
$tomatches=split($topattern, $to);
//$this->Email->to = $this->data['Undpuser']['email'];
$this->Email->to = $to;//array('hakimkal@gmail.com');
//$this->set('ml', $this->Undpuser->find('first',array('conditions'=>array('Undpuser.email'=>$this->Auth->user('email')))));


 $bcc='info@evricaevents.com';
//$bcc='abdulhakim.haliru@leproghrammeen.com';

if(!empty($bcc))
{
$pattern='[;|,]';
$matches=split($pattern, $bcc);

$this->Email->bcc = $matches;//array('hakimkal@gmail.com');
//$this->set('ml', $this->Undpuser->find('first',array('conditions'=>array('Undpuser.email'=>$this->Auth->user('email')))));
}


 $this->Email->subject = 'Evrica Account  Confirmation Mail';
 $this->Email->replyTo = 'noreply@evricaevents.com';

$this->layout='default';
$this->Email->template = 'confirmation';

 $this->Email->sendAs = 'html';

$this->set('emailID', $this->data['User']['email']);
//$this->set('', $this->data['Public']['sender']);

 $this->set('name', $this->data['User']['firstname']. ' '. $this->data['User']['lastname']);
  


 $this->set('server_name', $_SERVER['SERVER_NAME']);

 //Do not pass any args to send()
 if($this->Email->send())
         {

  $this->Session->setFlash('You have been Sucessfully  Registered, Kindly Check your email and confirm your account!');
                $this->redirect(array('action'=>'login'));

Configure::write('debug',0);
exit;

            }


            else
                {
                $this->Session->setFlash('Email Not sent, please try again later');
                 $this->redirect(array('action'=>'login'));
                 Configure::write('debug',0);
                 exit;
                // echo debug($this->data);
                }
}
else
    {
     $this->Session->setFlash('Ooops! , please provide your email,name and message');
                 Configure::write('debug',0);
                 exit;
    }

//
                 //
                }
                    else
                    {
                                      $this->Session->setFlash('Oops, Unable to create your account!');

                    }

                }

    
     
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}


        function login()
        {
            
         //$this->layout='default';
      $this->pageTitle='User Login ';
 

if(!empty($this->data))
{
    $user=$this->User->find('first',array('conditions'=>array('email'=>$this->data['User']['email'],'password'=>md5($this->data['User']['password']))));
if(!empty($user))
    {
    $this->Session->write('user',$user);
    $this->redirect('/dashboard/index');
    }
    else
        {
        $this->Session->setFlash('Incorrect credentials');
        $this->redirect('/');
        }

}
else
    {
  // debug($this->Session->read('user.User.email'));
    $this->redirect('/dashboard/index');
   
    }
  


	 
      

 }

  function logout()
    {
 $this->Session->delete('user',$user);

         $this->Session->setFlash('Logout Successful');

         $this->redirect('/');
    }

        function beforeFilter()
        {
  
        }

}
?>