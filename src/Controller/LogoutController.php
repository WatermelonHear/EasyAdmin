<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LogoutController
{
    #[Route('/logout')]
    public function registerPage() : Response
    {
        return new Response('<h1>Pagina logout</h1>');
    }
}