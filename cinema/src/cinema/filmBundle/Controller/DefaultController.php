<?php

namespace cinema\filmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/films", name="page_film")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('cinemafilmBundle:Film')->findAll();

        $titre_de_la_page = 'Films de la bibliothèque';

        return $this->render(
            'cinemafilmBundle:Film:list.html.twig',
            ['films' => $films, 'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        $film = $this->getDoctrine()->getRepository('cinemafilmBundle:Film')->find($id);

        return $this->render(
            'cinemafilmBundle:Film:show.html.twig',
            ['film' => $film]
        );
    }

    /**
     * @Route("/realisateurs", name="page_realisateurs")
     */
    public function listRea()
    {
        $realisateurs = $this->getDoctrine()->getRepository('cinemafilmBundle:personne')->findAll();

        $titre_de_la_page = 'Réalisateurs';

        return $this->render(
            'cinemafilmBundle:Personne:list.html.twig',
            ['realisateurs' => $realisateurs, 'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/realisateur/{id}", requirements={"id": "\d+"}, name="page_realisateur")
     */
    public function showRea($id)
    {


        $films = $this->getDoctrine()->getRepository('cinemafilmBundle:Film')->findByRealisateur($id);
        $realisateur = $this->getDoctrine()->getRepository('cinemafilmBundle:personne')->find($id);
        return $this->render(
            'cinemafilmBundle:personne:show.html.twig',
            ['films' => $films, 'realisateur' => $realisateur ]
        );
    }


}