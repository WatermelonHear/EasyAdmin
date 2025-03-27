<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextAreaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureCrud(Crud $crud): Crud    
    {
        return $crud
            ->setPageTitle('index','Gestionar Productos')
            ->setEntityLabelInSingular('Producto')
            ->setEntityLabelInPlural('Productos')
            ->setSearchFields(['name','sku'])
            ->setDefaultSort(['name' => 'ASC']);
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name', 'Nombre del Producto'),
            TextField::new('sku','SKU')->setMaxLength(8),
            NumberField::new('price','Precio')->setNumDecimals(2),
            NumberField::new('stock','Stock')
                ->setFormTypeOptions([
                    'attr' => ['min' => 0, 'step' =>1]
                ]),
            AssociationField::new('categories','Categorías')
                ->setFormTypeOptions([
                    'choice_label' => 'name',
                    'multiple' => true,
                ])
                ->setHelp('Seleccione una o más categorías para este producto.'),
        ];
    }

  
}
