<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Equipe;
use App\Entity\Joueur;
use App\Entity\Terrain;
use App\Entity\Entraineur;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Footix');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Entraineur', 'fa-solid fa-user-tie', Entraineur::class);
        yield MenuItem::linkToCrud('Equipe', 'fa fa-people-group', Equipe::class);
        yield MenuItem::linkToCrud('Joueur', 'fa-solid fa-people-roof', Joueur::class);
        yield MenuItem::linkToCrud('Terrain', 'fa-solid fa-futbol', Terrain::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fa-solid fa-user', User::class);
    }
}
