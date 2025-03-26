<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RegisterController
{
    #[Route('/register')]
    public function registerPage() : Response
    {
        return new Response('<h1>Pagina Registro</h1>');
    }
}