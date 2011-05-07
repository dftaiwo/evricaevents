<?php
/* EventDates Test cases generated on: 2011-05-07 12:17:36 : 1304767056*/
App::import('Controller', 'EventDates');

class TestEventDatesController extends EventDatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventDatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.event_date', 'app.event');

	function startTest() {
		$this->EventDates =& new TestEventDatesController();
		$this->EventDates->constructClasses();
	}

	function endTest() {
		unset($this->EventDates);
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