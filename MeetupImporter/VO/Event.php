<?php
namespace MeetupImporter\VO;

class Event {

	public $name;
	public $description;
	public $url;
	public $timestamp;

	/** @var  Venue */
	public $venue;
}