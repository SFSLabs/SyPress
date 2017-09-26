<?php

use Symfony\Component\Routing;
use Symfony\Component\Yaml\Yaml;
$routesArray = Yaml::parse(file_get_contents(__DIR__ . '/../config/routes.yml'));
if (!count($routesArray)) {
    return;
}
//print_r($routesArray);
$routes = new Routing\RouteCollection();
foreach ($routesArray as $routeName => $params) {
    if (isset($params['path']) && isset($params['_controller'])) {
        $routes->add($routeName, new Routing\Route($params['path'], array(
            //'name' => 'World',
            '_controller' => $params['_controller'],
        )));
    }
}
return $routes;