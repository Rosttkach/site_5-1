<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    /**
     * @Route("/price", name="price")
     */
    public function index()
    {
        return $this->render('price/price.html.twig', [
            'controller_name' => 'PriceController',
        ]);
    }
}
