<?php

namespace cinema\filmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('cinemafilmBundle:Default:index.html.twig');
    }

    /**
     * @Route("/films")
     */
    public function listAction()
    {
        return $this->render('cinemafilmBundle:Film:list.html.twig');
    }

    /**
     * @Route("/films/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        return $this->render('cinemafilmBundle:Film:show.html.twig');
    }
}
