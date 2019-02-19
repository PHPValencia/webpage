<?php
namespace Builder\VO;

class Venue {
	public $name;
	public $address;

	public $latitude;
	public $longitude;

	public function __toString()
    {
        return $this->name;
    }
}