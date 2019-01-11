<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HoseController extends AbstractController
{
    /**
     * @Route("/hose", name="hose")
     */
    public function index()
    {
        return $this->render('hose/hose.html.twig', [
            'controller_name' => 'HoseController',
        ]);
    }
}
