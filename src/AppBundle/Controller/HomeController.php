<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 * @package AppBundle\Controller
 */
class HomeController extends Controller
{
    /**
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->render('home/index.html.twig', []);
    }
}
