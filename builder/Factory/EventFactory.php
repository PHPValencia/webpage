<?php
namespace Builder\Factory;

use Builder\VO\Event;

class EventFactory {

	public static function build( array $data ) {
		$event = new Event;
		$event->description = $data['description'];
		$event->name = $data['name'];
		$event->url = $data['event_url'];
		$event->timestamp = $data['time'];

		$event->venue = VenueFactory::build( $data['venue'] );
		return $event;
	}
}