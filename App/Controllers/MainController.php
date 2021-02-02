<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Tools\TemplateRender;

class MainController extends Controller
{
    public function indexAction()
    {
        $renderer = new TemplateRender();
        $renderer->render('main', 'header', 'footer');
    }
}
