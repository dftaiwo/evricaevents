<?php
/* EventSpeaker Test cases generated on: 2011-05-07 12:17:53 : 1304767073*/
App::import('Model', 'EventSpeaker');

class EventSpeakerTestCase extends CakeTestCase {
	var $fixtures = array('app.event_speaker', 'app.event');

	function startTest() {
		$this->EventSpeaker =& ClassRegistry::init('EventSpeaker');
	}

	function endTest() {
		unset($this->EventSpeaker);
		ClassRegistry::flush();
	}

}
?>