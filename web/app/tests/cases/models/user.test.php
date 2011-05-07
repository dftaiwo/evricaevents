<?php
/* User Test cases generated on: 2011-05-07 12:18:41 : 1304767121*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.event', 'app.state', 'app.country', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.category', 'app.events_category', 'app.tag', 'app.events_tag', 'app.oauth');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>