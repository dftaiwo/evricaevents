<?php
/* Participant Test cases generated on: 2011-05-07 12:18:22 : 1304767102*/
App::import('Model', 'Participant');

class ParticipantTestCase extends CakeTestCase {
	var $fixtures = array('app.participant', 'app.event_seat', 'app.event', 'app.state', 'app.user', 'app.event_date', 'app.event_image', 'app.event_speaker', 'app.category', 'app.events_category', 'app.tag', 'app.events_tag');

	function startTest() {
		$this->Participant =& ClassRegistry::init('Participant');
	}

	function endTest() {
		unset($this->Participant);
		ClassRegistry::flush();
	}

}
?>