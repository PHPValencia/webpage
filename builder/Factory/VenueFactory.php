<?php
namespace Builder\Factory;

use Builder\VO\Venue;

class VenueFactory {
	public static function build( array $data ) {
		$venue = new Venue;
		$venue->address = $data['address_1'];
		$venue->name = $data['name'];
		$venue->latitude = $data['lat'];
		$venue->longitude = $data['lon'];
		return $venue;
	}
}