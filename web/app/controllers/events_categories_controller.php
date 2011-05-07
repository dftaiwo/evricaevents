<?php
class EventsCategoriesController extends AppController {

	var $name = 'EventsCategories';

	function index() {
		$this->EventsCategory->recursive = 0;
		$this->set('eventsCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid events category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eventsCategory', $this->EventsCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventsCategory->create();
			if ($this->EventsCategory->save($this->data)) {
				$this->Session->setFlash(__('The events category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events category could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->EventsCategory->Category->find('list');
		$events = $this->EventsCategory->Event->find('list');
		$this->set(compact('categories', 'events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid events category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventsCategory->save($this->data)) {
				$this->Session->setFlash(__('The events category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventsCategory->read(null, $id);
		}
		$categories = $this->EventsCategory->Category->find('list');
		$events = $this->EventsCategory->Event->find('list');
		$this->set(compact('categories', 'events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for events category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventsCategory->delete($id)) {
			$this->Session->setFlash(__('Events category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Events category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>