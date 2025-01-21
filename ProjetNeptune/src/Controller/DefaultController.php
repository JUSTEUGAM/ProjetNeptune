<?php
declare (strict_types = 1);
namespace MyApp\Controller;
use MyApp\Service\DependencyContainer;
use Twig\Environment;
use MyApp\Model\TypeModel;
use MyApp\Model\ProductModel;
use MyApp\Model\UserModel;


class DefaultController
{
    private $twig;

    private $typeModel;

    private $ProductModel;

    private $UserModel;
  
    public function __construct(Environment $twig, DependencyContainer $dependencyContainer)
    {
        $this->twig = $twig;

        $this->typeModel = $dependencyContainer->get('TypeModel');

        $this->productModel = $dependencyContainer->get('ProductModel');

        $this->userModel = $dependencyContainer->get('UserModel');
    }

    public function types()
    {
        $types = $this->typeModel->getAllTypes();
        echo $this->twig->render('defaultController/types.html.twig', ['types'=>$types]);
    }

    public function home()
    {
        echo $this->twig->render('defaultController/home.html.twig', []);
    }

    public function error404()
    {
        echo $this->twig->render('defaultController/error404.html.twig', []);
    }

    public function error500()
    {
        echo $this->twig->render('defaultController/error500.html.twig', []);
    }
    public function chambres()
    {
        echo $this->twig->render('defaultController/chambres.html.twig', []);
    }
    public function connexion()
    {
        echo $this->twig->render('defaultController/connexion.html.twig', []);
    }
    public function inscription()
    {
        echo $this->twig->render('defaultController/inscription.html.twig', []);
    }
    public function produits()
    {
        $produits = $this->productModel->getAllProduits();
        echo $this->twig->render('defaultController/produits.html.twig', ['produits'=>$produits]);
    }
    public function User()
    {
        $user = $this->userModel->getAllUsers();
        echo $this->twig->render('defaultController/User.html.twig', ['users'=>$user]);
    }
}
