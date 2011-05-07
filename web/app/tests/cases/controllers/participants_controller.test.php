<?php
/* Participants Test cases generated on: 2011-05-07 12:18:22 : 1304767102*/
App::import('Controller', 'Participants');

class TestParticipantsController extends ParticipantsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ParticipantsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.participant', 'app.event_seat', 'app.event', 'app.state', 'app.user', 'app.event_date', 'app.event_image', 'app.event_speaker', 'app.category', 'app.events_category', 'app.tag', 'app.events_tag');

	function startTest() {
		$this->Participants =& new TestParticipantsController();
		$this->Participants->constructClasses();
	}

	function endTest() {
		unset($this->Participants);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>