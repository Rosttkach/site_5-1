<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuickReleaseController extends AbstractController
{
    /**
     * @Route("/quick_release", name="quick_release")
     */
    public function index()
    {
        return $this->render('quick_release/quick_release.html.twig', [
            'controller_name' => 'QuickReleaseController',
        ]);
    }
}
