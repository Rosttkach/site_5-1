<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FittingPipeController extends AbstractController
{
    /**
     * @Route("/fitting_pipe", name="fitting_pipe")
     */
    public function index()
    {
        return $this->render('fitting_pipe/fitting_pipe.html.twig', [
            'controller_name' => 'FittingPipeController',
        ]);
    }
}
