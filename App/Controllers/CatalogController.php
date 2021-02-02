<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Tools\TemplateRender;

class CatalogController extends Controller
{
    public function indexAction()
    {
        $renderer = new TemplateRender();
        $renderer->render('catalog', 'header', 'footer');
    }
}
