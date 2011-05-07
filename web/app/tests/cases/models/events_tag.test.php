<?php
/* EventsTag Test cases generated on: 2011-05-07 12:18:11 : 1304767091*/
App::import('Model', 'EventsTag');

class EventsTagTestCase extends CakeTestCase {
	var $fixtures = array('app.events_tag', 'app.tag', 'app.event', 'app.state', 'app.user', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.category', 'app.events_category');

	function startTest() {
		$this->EventsTag =& ClassRegistry::init('EventsTag');
	}

	function endTest() {
		unset($this->EventsTag);
		ClassRegistry::flush();
	}

}
?>