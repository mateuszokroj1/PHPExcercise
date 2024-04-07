<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render("/base.html.twig", [
            "title" => "Witamy!",
            "content" => "Witamy na stronie głównej"    
        ]);
    }

    #[Route('/kontakt')]
    public function contact(): Response
    {
        return $this->render("/contact.html.twig");
    }
}

?>