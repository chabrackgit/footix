<?php

namespace App\Controller\Admin;

use App\Entity\Entraineur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class EntraineurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Entraineur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('nationalite'),
            BooleanField::new('ancien_Joeur'),
        ];
    }

}
