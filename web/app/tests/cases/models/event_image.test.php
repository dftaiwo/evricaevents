<?php
/* EventImage Test cases generated on: 2011-05-07 12:17:40 : 1304767060*/
App::import('Model', 'EventImage');

class EventImageTestCase extends CakeTestCase {
	var $fixtures = array('app.event_image', 'app.event');

	function startTest() {
		$this->EventImage =& ClassRegistry::init('EventImage');
	}

	function endTest() {
		unset($this->EventImage);
		ClassRegistry::flush();
	}

}
?>