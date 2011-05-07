<?php
/* Oauths Test cases generated on: 2011-05-07 12:18:18 : 1304767098*/
App::import('Controller', 'Oauths');

class TestOauthsController extends OauthsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OauthsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.oauth', 'app.user');

	function startTest() {
		$this->Oauths =& new TestOauthsController();
		$this->Oauths->constructClasses();
	}

	function endTest() {
		unset($this->Oauths);
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