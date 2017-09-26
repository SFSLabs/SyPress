<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
//$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
$routes->add('homepage', new Routing\Route('/', array(
    //'name' => 'World',
    '_controller' => 'Sypress\Controller\FrontController::homeAction',
)));
$routes->add('single', new Routing\Route('/single', array(
    '_controller' => 'Sypress\Controller\FrontController::singleAction',
)));
$routes->add('post', new Routing\Route('/post', array(
    '_controller' => 'Sypress\Controller\FrontController::postAction',
)));
return $routes;