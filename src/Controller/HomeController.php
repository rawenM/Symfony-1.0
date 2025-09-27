<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

final class HomeController extends AbstractController
{
    /*#[Route('/home', name: 'app_home')] //essential for any method
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [ //respons = html file 
            'controller_name' => 'HomeController',
        ]);
    }*/ //error khtr f nafs l file 

    #[Route('/show', name: 'app_show')]
    public function show(): Response
    {
        return new Response ('wlc new homepage');
    }

    #[Route('/show2', name: 'app_show2')] //why app_home works too?
    public function show2(): Response
    {
        return new Response ('<h1> wlc new homepage</h1>');
    }

    #[Route('/showJson', name: 'app_showJson')]
    public function showJson(): Response
    {
        return new JsonResponse ('wlc new homepage');
    }

    #[Route('/msg', name: 'msg')]
    public function msg(): Response
    { 
        $title = "Hello from symfony!";
        return $this->render('home/index.html.twig', [ 
            't' => $title, 
        ]);
    }
    #[Route('/msg2/{name}', name: 'msg2')]
    public function msg2(string $name): Response
    { 
        return $this->render('home/index.html.twig', [ 
            'n' => $name, //<h1>{{ n }}</h1>  in twig file/*simple variable affichage*/
        ]);
    }
    //ps: render tpointi toul aa dossier aati li tahtha toul
    #[Route('/user', name: 'user')]
    public function user(): Response
    { 
        $user = array ( );
        return $this->render('home/index.html.twig', [ 
            'user' => $user, 
        ]);
    }
}

//auto import auto complete git html css php ... sobhom max