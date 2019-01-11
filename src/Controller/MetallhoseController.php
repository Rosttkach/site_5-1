<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MetallhoseController extends AbstractController
{
    /**
     * @Route("/metallhose", name="metallhose")
     */
    public function index()
    {
        return $this->render('metallhose/metallhose.html.twig', [
            'controller_name' => 'MetalHoseController',
        ]);
    }

    /**
     * @Route("/download_metalhose_price", name="download_metalhose_price")
     **/
    public function downloadFileMetalhosepprice(){
        $file = 'сatalog/metalhoseprice.pdf';
        $response = new BinaryFileResponse($file);
        return $response;
    }

    /**
     * @Route("/download_metalhose_catalog", name="download_metalhose_catalog")
     **/
    public function downloadFileMetalhosecatalog(){
        $file = 'сatalog/metalhosecatalog.pdf';
        $response = new BinaryFileResponse($file);
        return $response;
    }

    /**
     * @Route("/download_metalhose_inquire", name="download_metalhose_inquire")
     **/
    public function downloadFileMetalhoseinquire(){
        $file = 'сatalog/metalhoseinquire.pdf';
        $response = new BinaryFileResponse($file);
        return $response;
    }
}
