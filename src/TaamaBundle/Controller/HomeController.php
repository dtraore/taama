<?php

namespace TaamaBundle\Controller;

use Doctrine\ORM\EntityManager;
use TaamaBundle\Entity\Pays;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Intl\Intl;

class HomeController extends Controller
{
    /**
     * @Route("/", name="taama_home")
     */
    public function indexAction()
    {
        $finder = $this->container->get('fos_elastica.finder.app.colis');
        dump($finder->find('Rennes'));
        return $this->render('default/index.html.twig');
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
