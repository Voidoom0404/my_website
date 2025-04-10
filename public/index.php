<?php
require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../app/views');
$twig = new Environment($loader);


$page = $_GET['page'] ?? 'home'; 


require '../app/controllers/PageController.php';
$controller = new PageController($twig);

switch ($page) {
    case 'about':
        echo $controller->about();
        break;
    case 'contacts':
        echo $controller->contacts();
        break;
    case 'home':
    default:
        echo $controller->home();
        break;
    }        