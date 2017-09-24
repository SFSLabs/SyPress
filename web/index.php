<?php
/**
 *
 */
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$routes = include __DIR__ . '/../src/app.php';

$application = new Sypress\Application($routes);

$application->handle($request)->send();