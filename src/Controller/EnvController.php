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
    public function index(\Swift_Mailer $mailer)
    {
        $prenom = $this->param->get('prenom');

        $message = (new \Swift_Message('bonjour'))
            ->setSubject('bonjour 2')
            ->setTo('sbo@conamed.de')
            ->setFrom('saysabou@gmail.com')
            ->setBody('Le corps', 'text/html');

        $mailer->send($message);

        return $this->render('env/index.html.twig', [
            'controller_name' => $prenom,
        ]);
    }
}
