<?php
class EventDatesController extends AppController {

	var $name = 'EventDates';

	function index() {
		$this->EventDate->recursive = 0;
		$this->set('eventDates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid event date', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eventDate', $this->EventDate->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventDate->create();
			if ($this->EventDate->save($this->data)) {
				$this->Session->setFlash(__('The event date has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event date could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventDate->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event date', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventDate->save($this->data)) {
				$this->Session->setFlash(__('The event date has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event date could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventDate->read(null, $id);
		}
		$events = $this->EventDate->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event date', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventDate->delete($id)) {
			$this->Session->setFlash(__('Event date deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event date was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>