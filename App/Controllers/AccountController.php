<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Tools\TemplateRender;

class AccountController extends Controller
{
    public function loginAction()
    {
        $renderer = new TemplateRender();
        $renderer->render('log', 'header', 'footer');
    }
    public function registerAction()
    {
        $renderer = new TemplateRender();
        $renderer->render('reg', 'header', 'footer');
    }
}