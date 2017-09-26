<?php
/**
 * Created by PhpStorm.
 * User: chokri
 * Date: 24/09/17
 * Time: 21:00
 */

namespace Sypress;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpKernel;

class Application extends HttpKernel\HttpKernel
{
    public function __construct($routes)
    {
        $context = new Routing\RequestContext();
        $matcher = new Routing\Matcher\UrlMatcher($routes, $context);
        $requestStack = new HttpFoundation\RequestStack();

        $controllerResolver = new HttpKernel\Controller\ControllerResolver();
        $argumentResolver = new HttpKernel\Controller\ArgumentResolver();

        $dispatcher = new EventDispatcher();
        $dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher, $requestStack));
        $dispatcher->addSubscriber(new HttpKernel\EventListener\ResponseListener('UTF-8'));

        parent::__construct($dispatcher, $controllerResolver, $requestStack, $argumentResolver);
    }
}