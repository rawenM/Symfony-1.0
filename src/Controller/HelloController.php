<?php
//anseh, cmd php bin/console make:Controller tasnaalek controller wahadha
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
class HelloController{

    #[Route('/hello', name: 'app_hello')]
    function afficher() : Response {
        return new Response ("Hello 3A20") ; //requette http
    }
    
}
?>