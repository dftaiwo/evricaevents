<?php
/* EventsCategory Test cases generated on: 2011-05-07 12:18:03 : 1304767083*/
App::import('Model', 'EventsCategory');

class EventsCategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.events_category', 'app.category', 'app.event', 'app.state', 'app.user', 'app.event_date', 'app.event_image', 'app.event_seat', 'app.participant', 'app.event_speaker', 'app.tag', 'app.events_tag');

	function startTest() {
		$this->EventsCategory =& ClassRegistry::init('EventsCategory');
	}

	function endTest() {
		unset($this->EventsCategory);
		ClassRegistry::flush();
	}

}
?>