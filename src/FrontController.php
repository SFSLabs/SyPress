<?php
/**
 * Created by PhpStorm.
 * User: chokri
 * Date: 24/09/17
 * Time: 12:52
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontController
{
    public function indexAction(Request $request, $name)
    {
        return new Response('Nope, this is not a leap year.');
    }
}