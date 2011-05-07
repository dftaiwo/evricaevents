<?php
class CountriesController extends AppController {

	var $name = 'Countries';

	function index() {
		$this->Country->recursive = 0;
		$this->set('countries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid country', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('country', $this->Country->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Country->create();
			if ($this->Country->save($this->data)) {
				$this->Session->setFlash(__('The country has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid country', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Country->save($this->data)) {
				$this->Session->setFlash(__('The country has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Country->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for country', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Country->delete($id)) {
			$this->Session->setFlash(__('Country deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Country was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>