<?php require '../php/autoload.php';
//$config = require '../conf/config.php';
$path = trim($_SERVER['REQUEST_URI'], '/');
$products = require '../db/product-db.php';
try
{
    $db = new Dbreader($products);
    $product = $db->getByID(3);
    echo implode($product);
    $renderer = new TemplateRender();
    $renderer->render('main', 'header', 'footer');
}
catch (\Exception $error){
    echo $error;
}

