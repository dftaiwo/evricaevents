<?php
/* EventSeats Test cases generated on: 2011-05-07 12:17:48 : 1304767068*/
App::import('Controller', 'EventSeats');

class TestEventSeatsController extends EventSeatsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventSeatsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.event_seat', 'app.event', 'app.participant');

	function startTest() {
		$this->EventSeats =& new TestEventSeatsController();
		$this->EventSeats->constructClasses();
	}

	function endTest() {
		unset($this->EventSeats);
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