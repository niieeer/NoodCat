<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper as Em;
use App\Entity\Bar;

class BarController
{

    public static function index()
    {
        include "./src/Views/bar_home.php";
    }

    public static function displayAllBars()
    {


        include "./src/Views/bar_list.php";
    }

    const NEEDS = [
        "adresse",
        "nom"
    ];

    public static function showAddBar()
    {
        include './src/Views/bar_creation.php';
    }
    public static function addBar()
    {
        echo ("Thing");
        var_dump($_POST);

        if (empty($_POST)) {
            echo ("empty issue");
            foreach (self::NEEDS as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque des champs à remplir";
                    include("./src/Views/bar_creation.php");
                    exit;
                }
            }
        }

        $_POST[$value] = htmlentities(strip_tags($_POST[$value]));

        echo ("azazza");

        $Bar = new Bar($_POST["puce"], $_POST["numero_bar"]);

        echo ("bar created");
        $entityManager = Em::getEntityManager();
        $entityManager->persist($Bar);

        try {
            $entityManager->flush();
            header('Location: http://localhost/NoodCat');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
