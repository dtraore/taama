<?php

namespace TaamaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        dump('Yes');
        dump($this->getParameter('kernel.environment'));
        return $this->render('TaamaBundle:home:index.html.twig');
    }

    /**
     * @Route("/test")
     */
    public function testAction()
    {
        //dump('Yes');
        return $this->render('base.html.twig');
    }
}
