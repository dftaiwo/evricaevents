<?php
class OauthsController extends AppController {

	var $name = 'Oauths';

	function index() {
		$this->Oauth->recursive = 0;
		$this->set('oauths', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid oauth', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('oauth', $this->Oauth->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Oauth->create();
			if ($this->Oauth->save($this->data)) {
				$this->Session->setFlash(__('The oauth has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oauth could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Oauth->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid oauth', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Oauth->save($this->data)) {
				$this->Session->setFlash(__('The oauth has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oauth could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Oauth->read(null, $id);
		}
		$users = $this->Oauth->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for oauth', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Oauth->delete($id)) {
			$this->Session->setFlash(__('Oauth deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Oauth was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>