<?php

require 'vendor/autoload.php';

use Builder\MeetupImporter;
use Builder\VO\Event;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class Builder
{
    private $event;
    private $events;
    private $fs;

    public function __construct()
    {
        $this->events = [
            ['title' => 'Title One'],
            ['title' => 'Title Two'],
        ];

        $this->fs = new Filesystem();
    }

    public function build()
    {
        $environmentLoader = new \josegonzalez\Dotenv\Loader(__DIR__.'/.env');
        $environmentVars = $environmentLoader->parse()->toArray();

        $importer = new MeetupImporter($environmentVars['API_KEY'], $environmentVars['MEETUP_GROUP_IDENTIFIER']);
        $events = $importer->getEvents();

        foreach ($events as $event) {

            $content = sprintf("---
title: %s
when: %s
address: %s
meetup: %s
section: content
---

%s
", $event->name, $event->timestamp, $event->venue, $event->url, $event->description);

            file_put_contents('source/_events/' . $event->timestamp, $content);
        }
    }
}

$builder = new Builder();
$builder->build();