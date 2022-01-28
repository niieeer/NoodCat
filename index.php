<?php

use Router\Router;

require_once('vendor/autoload.php');

$router = new Router($_GET['url']);
if (isset($_SESSION)) {
    switch ($_SESSION['type']) {
        case "client":

            break;
        case "cashier":;

            break;

        case "manager":;

            break;

        default:
    }
}

$router->get("/", "App\Controller\AppController@index");

$router->get("/signin", "App\Controller\UserController@showSignIn");
$router->post("/signin", "App\Controller\UserController@addUser");
$router->get("/login", "App\Controller\UserController@showLogin");
$router->post("/login", "App\Controller\UserController@login");

//Cats
$router->get("/cats", "App\Controller\CatController@index");
$router->get("/cats_add", "App\Controller\CatController@showAddCat");
$router->post("/cats_add", "App\Controller\CatController@addCat");

//Bar
$router->get("/bar", "App\Controller\BarController@index");
$router->get("/showbars", "App\Controller\BarController@displayAllBars");
$router->get("/add_Bar", "App\Controller\BarController@showAddBar");
$router->post("/add_Bar", "App\Controller\BarController@addBar");

//Final
$router->run();
