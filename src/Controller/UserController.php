<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;
use \DateTime;

class UserController
{
    public function showSignIn()
    {
        include './src/Views/inscription.php';
    }
}
