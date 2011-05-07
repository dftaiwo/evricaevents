<?php
/* Oauth Test cases generated on: 2011-05-07 12:18:17 : 1304767097*/
App::import('Model', 'Oauth');

class OauthTestCase extends CakeTestCase {
	var $fixtures = array('app.oauth', 'app.user');

	function startTest() {
		$this->Oauth =& ClassRegistry::init('Oauth');
	}

	function endTest() {
		unset($this->Oauth);
		ClassRegistry::flush();
	}

}
?>