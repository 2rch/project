<?php
require '../vendor/autoload.php';
//require '../autoload.php';
use App\Models\Dbreader;
use Monolog\Logger;
//use App\Tools\logger\Logger;
use App\Tools\TemplateRender;

$config = require '../App/Config/config.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../App/Database/product-db.php';
$logger = new Logger('name');
try {
    $db = new Dbreader($products);
    $product = $db->getByID(8);
    echo implode($product);
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');
} catch (\Exception $error) {
    $logger->warning($error, ['id' => 8]);
    echo $error;
}
