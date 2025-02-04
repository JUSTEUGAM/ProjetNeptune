<?php
declare (strict_types = 1);
namespace MyApp\Controller;

use MyApp\Service\DependencyContainer;
use Twig\Environment;
use MyApp\Entity\User;
use MyApp\Model\UserModel;


class DefaultController
{
    private $twig;

    private $UserModel;
  
    public function __construct(Environment $twig, DependencyContainer $dependencyContainer)
    {
        $this->twig = $twig;

        $this->UserModel = $dependencyContainer->get('UserModel');
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

    public function profil()
    {
        echo $this->twig->render('defaultController/profil.html.twig', []);
    }

    public function User()
    {
        $users = $this->userModel->getAllUser();
        echo $this->twig->render('defaultController/profil.html.twig', ['users'=>$users]);
    }
    public function inscription()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
            $userFirstName = filter_input(INPUT_POST, 'userFirstName', FILTER_SANITIZE_STRING);
            $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
            $userNum = filter_input(INPUT_POST, 'userNum', FILTER_SANITIZE_STRING);
            $userPass = filter_input(INPUT_POST, 'userPass', FILTER_SANITIZE_STRING);
            if (!empty($_POST['userName']) && !empty($_POST['userFirstName']) && !empty($_POST['userEmail']) && !empty($_POST['userNum']) && !empty($_POST['userPass'])) {
                $users = new User(null, $userName,  $userEmail, $userPass, $userNum, false, $userFirstName);
                $success = $this->UserModel->createUser($users);
                if ($success) {
                    header('Location: index.php?page=profil');
                }

            }

        }
        echo $this->twig->render('defaultController/inscription.html.twig', []);
    }
}
