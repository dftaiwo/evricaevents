<?php
/* EventImages Test cases generated on: 2011-05-07 12:17:41 : 1304767061*/
App::import('Controller', 'EventImages');

class TestEventImagesController extends EventImagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventImagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.event_image', 'app.event');

	function startTest() {
		$this->EventImages =& new TestEventImagesController();
		$this->EventImages->constructClasses();
	}

	function endTest() {
		unset($this->EventImages);
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