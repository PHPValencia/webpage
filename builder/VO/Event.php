<?php
namespace Builder\VO;

class Event {

	public $name;
	public $description;
	public $url;
	public $timestamp;

	/** @var  Venue */
	public $venue;
}