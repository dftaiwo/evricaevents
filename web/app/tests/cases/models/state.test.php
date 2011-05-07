<?php
/* State Test cases generated on: 2011-05-07 12:18:31 : 1304767111*/
App::import('Model', 'State');

class StateTestCase extends CakeTestCase {
	var $fixtures = array('app.state', 'app.country', 'app.event', 'app.user', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.category', 'app.events_category', 'app.tag', 'app.events_tag');

	function startTest() {
		$this->State =& ClassRegistry::init('State');
	}

	function endTest() {
		unset($this->State);
		ClassRegistry::flush();
	}

}
?>