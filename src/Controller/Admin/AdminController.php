<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;

#[AdminDashboard(routePath:'/admin', routeName:'admin')]
class AdminController extends AbstractDashboardController
{
    public function index(): Response
    {
        return $this->render('dashboard.html.twig', [
            'title' => 'Panel de Administracion',
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mi Aplicacion Admin');
    }

    public function configureMenuItems(): iterable
    {
       yield MenuItem::linkToDashboard('Menu Principal','fa fa-home');
       yield MenuItem::linkToCrud('Categorias', 'fa fa-box',Category::class);
       yield MenuItem::linkToCrud('Productos', 'fa fa-tags',Product::class);
        

    }
}
