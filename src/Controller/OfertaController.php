<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfertaController extends AbstractController
{
    #[Route('/oferta')]
    public function index(): Response
    {
        return $this->render("/base.html.twig", [
            "title" => "Oferta",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque gravida in. Ut faucibus pulvinar elementum integer. Orci a scelerisque purus semper. Ultrices eros in cursus turpis. Ut sem nulla pharetra diam sit amet. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Ipsum a arcu cursus vitae congue mauris. Feugiat vivamus at augue eget. Justo laoreet sit amet cursus sit amet. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Auctor augue mauris augue neque gravida in fermentum. Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et molestie ac feugiat sed lectus vestibulum."    
        ]);
    }
}

?>