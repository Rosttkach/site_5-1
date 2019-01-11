<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StripWoundController extends AbstractController
{
    /**
     * @Route("/strip_wound", name="strip_wound")
     */
    public function index()
    {
        return $this->render('strip_wound/strip_wound.html.twig', [
            'controller_name' => 'StripWoundController',
        ]);
    }

    /**
     * @Route("/download_price", name="download_stripprice")
     **/
    public function downloadFileStripprice(){
        $file = 'сatalog/stripprice.pdf';
        $response = new BinaryFileResponse($file);
        return $response;
    }

    /**
     * @Route("/download_catalog", name="download_stripcatalog")
     **/
    public function downloadFileStripcatalog(){
        $file = 'сatalog/stripcatalog.pdf';
        $response = new BinaryFileResponse($file);
        return $response;
    }
}
