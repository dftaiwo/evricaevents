<?php
/* EventSeat Test cases generated on: 2011-05-07 12:17:47 : 1304767067*/
App::import('Model', 'EventSeat');

class EventSeatTestCase extends CakeTestCase {
	var $fixtures = array('app.event_seat', 'app.event', 'app.participant');

	function startTest() {
		$this->EventSeat =& ClassRegistry::init('EventSeat');
	}

	function endTest() {
		unset($this->EventSeat);
		ClassRegistry::flush();
	}

}
?>