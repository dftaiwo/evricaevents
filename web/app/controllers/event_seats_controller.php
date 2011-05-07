<?php
class EventSeatsController extends AppController {

	var $name = 'EventSeats';

	function index() {
		$this->EventSeat->recursive = 0;
		$this->set('eventSeats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid event seat', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eventSeat', $this->EventSeat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventSeat->create();
			if ($this->EventSeat->save($this->data)) {
				$this->Session->setFlash(__('The event seat has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event seat could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventSeat->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event seat', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventSeat->save($this->data)) {
				$this->Session->setFlash(__('The event seat has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event seat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventSeat->read(null, $id);
		}
		$events = $this->EventSeat->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event seat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventSeat->delete($id)) {
			$this->Session->setFlash(__('Event seat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event seat was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>