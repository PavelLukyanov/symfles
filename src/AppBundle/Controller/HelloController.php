<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    // в адресной строке пишешь /hello/любое имя
    /**
     * @Route("/hello/{name}", name="hello")
     */

    public function indexAction($name) //возращает hello любое имя
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
