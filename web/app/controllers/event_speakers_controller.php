<?php
class EventSpeakersController extends AppController {

	var $name = 'EventSpeakers';

	function index() {
		$this->EventSpeaker->recursive = 0;
		$this->set('eventSpeakers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid event speaker', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eventSpeaker', $this->EventSpeaker->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventSpeaker->create();
			if ($this->EventSpeaker->save($this->data)) {
				$this->Session->setFlash(__('The event speaker has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event speaker could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventSpeaker->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event speaker', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventSpeaker->save($this->data)) {
				$this->Session->setFlash(__('The event speaker has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event speaker could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventSpeaker->read(null, $id);
		}
		$events = $this->EventSpeaker->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event speaker', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventSpeaker->delete($id)) {
			$this->Session->setFlash(__('Event speaker deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event speaker was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>