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
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        return parent::index();

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mi Aplicacion Admin');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard','fa fa-home'),
            MenuItem::linkToCrud('Categorias', 'fa fa-tags',Category::class),
            MenuItem::linkToCrud('Productos', 'fa fa-tags',Product::class),
        ];

    }
}
