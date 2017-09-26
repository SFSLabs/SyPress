<?php
/**
 * Created by PhpStorm.
 * User: chokri
 * Date: 24/09/17
 * Time: 21:38
 */

namespace Sypress\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\Helper;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;

class FrontController
{
    public function homeAction(Request $request)
    {
        $loader = new FilesystemLoader(array(
            __DIR__ . '/../Templates/Front/%name%',
            //__DIR__ . '/../Templates/Front/layout.php',
        ));
        $templating = new PhpEngine(new TemplateNameParser(), $loader, array(
            new Helper\SlotsHelper(),
        ));
        return new Response($templating->render('home.php', array(
            'firstname' => 'Chokri',
        )));
    }
    
    public function singleAction(Request $request)
    {
        $loader = new FilesystemLoader(__DIR__ . '/../Templates/Front/%name%');
        $templating = new PhpEngine(new TemplateNameParser(), $loader);
        return new Response($templating->render('single.php', array('page' => 'Single')));
    }

    public function postAction(Request $request)
    {
        $loader = new FilesystemLoader(__DIR__ . '/../Templates/Front/%name%');
        $templating = new PhpEngine(new TemplateNameParser(), $loader);
        return new Response($templating->render('post.php', array('page' => 'Post')));
    }

    public function contactAction(Request $request)
    {
        $loader = new FilesystemLoader(__DIR__ . '/../Templates/Front/%name%');
        $templating = new PhpEngine(new TemplateNameParser(), $loader);
        return new Response($templating->render('post.php', array('page' => 'Post')));
    }
}