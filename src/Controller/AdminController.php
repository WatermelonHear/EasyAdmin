<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController
{
    #[Route('/admin')]
    public function adminPage() : Response
    {
        return new Response('<h1>Pagina Admin</h1>');
    }

}