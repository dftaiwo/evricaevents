<?php
class EventImagesController extends AppController {

	var $name = 'EventImages';

	function index() {
		$this->EventImage->recursive = 0;
		$this->set('eventImages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid event image', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eventImage', $this->EventImage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventImage->create();
			if ($this->EventImage->save($this->data)) {
				$this->Session->setFlash(__('The event image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event image could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventImage->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event image', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventImage->save($this->data)) {
				$this->Session->setFlash(__('The event image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event image could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventImage->read(null, $id);
		}
		$events = $this->EventImage->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event image', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventImage->delete($id)) {
			$this->Session->setFlash(__('Event image deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event image was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>