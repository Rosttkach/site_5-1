<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FittingHydraulicController extends AbstractController
{
    /**
     * @Route("/fitting_hydraulic", name="fitting_hydraulic")
     */
    public function index()
    {
        return $this->render('fitting_hydraulic/fitting_hydraulic.html.twig', [
            'controller_name' => 'FittingHydraulicController',
        ]);
    }
}
