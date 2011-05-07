<?php
/* EventsCategories Test cases generated on: 2011-05-07 12:18:04 : 1304767084*/
App::import('Controller', 'EventsCategories');

class TestEventsCategoriesController extends EventsCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventsCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.events_category', 'app.category', 'app.event', 'app.state', 'app.user', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.tag', 'app.events_tag');

	function startTest() {
		$this->EventsCategories =& new TestEventsCategoriesController();
		$this->EventsCategories->constructClasses();
	}

	function endTest() {
		unset($this->EventsCategories);
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