<?php
/**
 * Created by PhpStorm.
 * User: statu
 * Date: 5/8/17
 * Time: 8:55 PM
 */

namespace Builder;

require __DIR__ .'/../vendor/autoload.php';

use Builder\Factory\EventFactory;
use Builder\VO\Event;
use Builder\VO\Venue;
use MeetupEvents;
use MeetupKeyAuthConnection;

class MeetupImporter {

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

$environmentLoader = new \josegonzalez\Dotenv\Loader(__DIR__.'/../.env');
$environmentVars = $environmentLoader->parse()->toArray();

$importer = new MeetupImporter( $environmentVars['API_KEY'], $environmentVars['MEETUP_GROUP_IDENTIFIER'] );

var_dump( $importer->getEvents() );
