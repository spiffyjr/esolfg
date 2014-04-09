<?php

use Spiffy\Mvc\Factory\DefaultApplicationFactory;

chdir(dirname(__DIR__));

if (!file_exists('vendor/autoload.php')) {
    throw new \RuntimeException('Failed to load dependencies: did you run `composer install`');
}

include 'vendor/autoload.php';

ini_set('display_errors', true);
ini_set('display_startup_errors', true);
ini_set('error_reporting', E_ALL);

$mvcFactory = new DefaultApplicationFactory(include 'app/config/app.config.php');
$mvc = $mvcFactory->createService();
$mvc->run();

echo '<pre>';
echo PHP_EOL;
printf('%2.2fms', ((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) * 1000);
echo PHP_EOL;
echo '</pre>';
