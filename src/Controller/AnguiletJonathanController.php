<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnguiletJonathanController extends AbstractController
{
    #[Route('/anguilet/jonathan', name: 'app_anguilet_jonathan')]
    public function index(): Response
    {
        return $this->render('anguilet_jonathan/index.html.twig', [
            'controller_name' => 'AnguiletJonathanController',
        ]);
    }
	
	#[Route('/anguilet', name: 'anguilet')]
    public function anguilet(): Response
    {
        return $this->render('anguilet_jonathan/anguilet.html.twig', [
            'controller_name' => 'AnguiletJonathanController',
        ]);
    }
	
	#[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('anguilet_jonathan/blog.html.twig', [
            'controller_name' => 'AnguiletJonathanController',
        ]);
    }
}
