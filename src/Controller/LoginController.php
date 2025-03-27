<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginController extends AbstractController

{
    #[Route('/login')]
    public function loginPage() : Response
    {
        return new Response('<h1>Pagina login</h1>');
    }
}