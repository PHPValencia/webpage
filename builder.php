<?php

require 'vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class Builder
{
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
        $test = $this->fs->exists('source');
        var_dump($test);
    }
}

$builder = new Builder();
$builder->build();