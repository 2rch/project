<?php

require '../vendor/autoload.php';

use App\Models\Dbreader;
use App\Tools\logger\Logger;
use App\Tools\TemplateRender;
use App\Controllers\Router;

$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../App/Database/product-db.php';
$logger = new Logger();
//$_SERVER['REQUEST_URI'] = '/account/register';

try {
    $logger = new Logger();
    $products = require '../App/Database/product-db.php';
    $db = new Dbreader($products);
    $product = $db->getByID(3);
    echo implode(' ', $product);
    $router = new Router();
    $router->run();
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');
} catch (\Exception $error) {
    $logger->warning($error, ['id' => 3]);
    echo $error;
}
