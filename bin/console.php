<?php

use Spiffy\Mvc\Factory\DefaultConsoleFactory;

chdir(dirname(__DIR__));

if (!file_exists('vendor/autoload.php')) {
    throw new \RuntimeException('Failed to load dependencies: did you run `composer install`');
}

include 'vendor/autoload.php';

$consoleFactory = new DefaultConsoleFactory();
$console = $consoleFactory->create(include 'config/app.php');
$console->getApplication()->bootstrap();
$console->run();

