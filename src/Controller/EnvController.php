<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EnvController extends AbstractController
{
    /**
     * @Route("/env", name="env")
     */
    public function index()
    {
        return $this->render('env/index.html.twig', [
            'controller_name' => 'EnvController',
        ]);
    }
}
