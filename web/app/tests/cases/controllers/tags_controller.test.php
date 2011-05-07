<?php
/* Tags Test cases generated on: 2011-05-07 12:18:36 : 1304767116*/
App::import('Controller', 'Tags');

class TestTagsController extends TagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.event', 'app.state', 'app.country', 'app.user', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.category', 'app.events_category', 'app.events_tag');

	function startTest() {
		$this->Tags =& new TestTagsController();
		$this->Tags->constructClasses();
	}

	function endTest() {
		unset($this->Tags);
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