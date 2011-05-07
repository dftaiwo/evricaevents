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
                $this->Session->setFlash('You have been Sucessfully  Registered, Kindly Check your email and confirm your account!');
                $this->redirect(array('action'=>'login'));
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