<?php

require '../vendor/autoload.php';

use App\Tools\Dbreader;
use Monolog\Logger;
use libraries\Router;
use Dotenv\Dotenv;
use libraries\TemplateRender;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../App/Database/product-db.php';
$logger = new Logger('name');
$router = new Router;
$router->run();

try {
    $db = new Dbreader($products);
    $product = $db->getByID(2);
    //echo implode($product);
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');
} catch (\Exception $error) {
    $logger->warning($error, ['id' => 2]);
    echo $error;
}
