<?php
/* EventsTags Test cases generated on: 2011-05-07 12:18:11 : 1304767091*/
App::import('Controller', 'EventsTags');

class TestEventsTagsController extends EventsTagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventsTagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.events_tag', 'app.tag', 'app.event', 'app.state', 'app.user', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.category', 'app.events_category');

	function startTest() {
		$this->EventsTags =& new TestEventsTagsController();
		$this->EventsTags->constructClasses();
	}

	function endTest() {
		unset($this->EventsTags);
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