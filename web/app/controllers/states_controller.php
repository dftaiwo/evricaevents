<?php
class StatesController extends AppController {

	var $name = 'States';

	function index() {
		$this->State->recursive = 0;
		$this->set('states', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid state', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('state', $this->State->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->State->create();
			if ($this->State->save($this->data)) {
				$this->Session->setFlash(__('The state has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid state', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->State->save($this->data)) {
				$this->Session->setFlash(__('The state has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->State->read(null, $id);
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for state', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->State->delete($id)) {
			$this->Session->setFlash(__('State deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('State was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>