<?php

namespace TaamaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TaamaBundle:Default:index.html.twig');
    }
}
