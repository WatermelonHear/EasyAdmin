<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegisterController extends AbstractController
{
    #[Route('/register')]
    public function index(UserPasswordHasherInterface $userPasswordHasher) : Response
    {
        return new Response('<h1>Pagina Registro</h1>');
    }
}