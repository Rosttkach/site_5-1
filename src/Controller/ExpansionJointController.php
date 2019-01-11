<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExpansionJointController extends AbstractController
{
    /**
     * @Route("/expansion_joint", name="expansion_joint")
     */
    public function index()
    {
        return $this->render('expansion_joint/expansion_joint.html.twig', [
            'controller_name' => 'ExpansionJointController',
        ]);
    }
}
