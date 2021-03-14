<?php

namespace App\Controllers;
use App\Tools\TemplateRender;

use App\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
        $data = require '../App/Database/product-db.php';
        $renderer = new TemplateRender();
        $renderer->render('data', 'header','footer');
    }
}