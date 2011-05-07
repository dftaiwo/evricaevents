<?php
/* EventSpeakers Test cases generated on: 2011-05-07 12:17:55 : 1304767075*/
App::import('Controller', 'EventSpeakers');

class TestEventSpeakersController extends EventSpeakersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventSpeakersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.event_speaker', 'app.event');

	function startTest() {
		$this->EventSpeakers =& new TestEventSpeakersController();
		$this->EventSpeakers->constructClasses();
	}

	function endTest() {
		unset($this->EventSpeakers);
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