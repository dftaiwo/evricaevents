<?php
/* EventDate Test cases generated on: 2011-05-07 12:17:36 : 1304767056*/
App::import('Model', 'EventDate');

class EventDateTestCase extends CakeTestCase {
	var $fixtures = array('app.event_date', 'app.event');

	function startTest() {
		$this->EventDate =& ClassRegistry::init('EventDate');
	}

	function endTest() {
		unset($this->EventDate);
		ClassRegistry::flush();
	}

}
?>