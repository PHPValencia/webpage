<?php
/**
 * Created by PhpStorm.
 * User: statu
 * Date: 5/8/17
 * Time: 8:55 PM
 */

namespace MeetupImporter;

use MeetupImporter\Factory\EventFactory;
use MeetupEvents;
use MeetupKeyAuthConnection;

class Importer {

	private $apiKey;
	private $meetupGroupIdentifier;

	public function __construct( $apiKey, $meetupGroupIdentifier ) {
		$this->apiKey = $apiKey;
		$this->meetupGroupIdentifier = $meetupGroupIdentifier;
	}

	private function getUpcomingEvents() {
		$connection = new MeetupKeyAuthConnection( $this->apiKey );
		$m = new MeetupEvents($connection);
		$events = $m->getEvents( array(
			'group_urlname' => $this->meetupGroupIdentifier,
			'status' => 'past'
		) );
		return $events;
	}

	public function getEvents() {
		$eventsData = $this->getUpcomingEvents();
		$events = [];
		foreach($eventsData as $eventData) {
			$events[] = EventFactory::build( $eventData );
		}
		return $events;
	}
}

