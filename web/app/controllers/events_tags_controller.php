<?php
class EventsTagsController extends AppController {

	var $name = 'EventsTags';

	function index() {
		$this->EventsTag->recursive = 0;
		$this->set('eventsTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid events tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eventsTag', $this->EventsTag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventsTag->create();
			if ($this->EventsTag->save($this->data)) {
				$this->Session->setFlash(__('The events tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events tag could not be saved. Please, try again.', true));
			}
		}
		$tags = $this->EventsTag->Tag->find('list');
		$events = $this->EventsTag->Event->find('list');
		$this->set(compact('tags', 'events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid events tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventsTag->save($this->data)) {
				$this->Session->setFlash(__('The events tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventsTag->read(null, $id);
		}
		$tags = $this->EventsTag->Tag->find('list');
		$events = $this->EventsTag->Event->find('list');
		$this->set(compact('tags', 'events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for events tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventsTag->delete($id)) {
			$this->Session->setFlash(__('Events tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Events tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>