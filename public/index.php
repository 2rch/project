<?php
require '../vendor/autoload.php';
//require '../autoload.php';
use App\Models\Dbreader;
use App\Tools\logger\Logger;
use App\Tools\TemplateRender;

$config = require '../App/Config/config.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../App/Database/product-db.php';
$logger = new Logger();
use \Models\Dbreader;
use \Tools\logger\Logger;
use \Tools\TemplateRender;
use \Controllers\Router;

//$_SERVER['REQUEST_URI'] = '/account/register';

try
{
    $products = require '../Database/product-db.php';
    $logger = new Logger();
    $db = new Dbreader($products);
    $product = $db->getByID(3);
    echo implode(' ', $product);
    $router = new Router();
    $router->run();
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');

}
catch (\Exception $error){
    $logger->warning($error, ['id' => 3]);
    echo $error;
}

