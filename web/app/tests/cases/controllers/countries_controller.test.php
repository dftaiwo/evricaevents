<?php
/* Countries Test cases generated on: 2011-05-07 12:17:32 : 1304767052*/
App::import('Controller', 'Countries');

class TestCountriesController extends CountriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CountriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.country', 'app.state');

	function startTest() {
		$this->Countries =& new TestCountriesController();
		$this->Countries->constructClasses();
	}

	function endTest() {
		unset($this->Countries);
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