<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Annotation\Route;

class EnvController extends AbstractController
{
    private $param;

    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->param = $parameterBag;
    }

    /**
     * @Route("/env", name="env")
     */
    public function index()
    {
        $prenom = $this->param->get('prenom');

        return $this->render('env/index.html.twig', [
            'controller_name' => $prenom,
        ]);
    }
}
