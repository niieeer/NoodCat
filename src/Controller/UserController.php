<?php

namespace App\Controller;

use App\Entity\Client;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\User;
use App\Helpers\EntityManagerHelper;
use \DateTime;

class UserController
{
    public function showSignIn()
    {
        include './src/Views/inscription.php';
    }

    const NEEDS = [
        "firstname",
        "lastname",
        "email",
        "password",
        "identityCard"
    ];

    public function addUser()
    {
        if (!empty($_POST)) {
            foreach (self::NEEDS as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque des champs à replir";
                    include("./src/Views/inscription.php");
                    exit;
                }
                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }


            $d =  new DateTime();
            $user = new Client($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $d, $_POST["identityCard"]);

            $entityManager = EntityManagerHelper::getEntityManager();
            $entityManager->persist($user);
            try {
                $entityManager->flush();
                header('Location: http://localhost/NoodCat');
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
        }
    }

    public function showLogin()
    {
        include("./src/Views/connexion.php");
    }

    public function login()
    {
        if (empty($_POST)) {
            include("./src/Views/connexion.php");
        }

        if (!empty($_POST)) {
            foreach (self:: as $key => $value) {
                # code...
            }
        }
       
    }
}
