<?php

namespace App\Controller;

use App\Entity\Cat;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\EntityRepository;

class CatController
{
    public static function index()
    {
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Cat"));

        $Cat = $repo->findAll();
        echo ($Cat);
        if (empty($_SESSION['email'])) {
            echo ("email found");
            include "./src/Views/cat_list.php";
        }
    }

    const NEEDS = [
        "puce",
        "description",
        "bar"
    ];

    public static function addCat()
    {
        echo ("Function add cat");
        if (!empty($_POST)) {
            foreach (self::NEEDS as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque des champs à replir";
                    include("./src/Views/cat_register.php");
                    exit;
                }
                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }
            // int $puceNum, string $description, Bar $adress, Bar $enseigne, string $statut)

            $Cat = new Cat($puceNum, $description, $bar);

            $entityManager = Em::getEntityManager();
            $entityManager->persist($Cat);
            try {
                $entityManager->flush();
                header('Location: http://localhost/NoodCat');
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
        }
    }
}
