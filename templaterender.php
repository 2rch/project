<?php
class TemplateRender
{
    public function render(string $template, string $layout)
    {
        $templatePath =__DIR__ . '/templates/';
        ob_start();
        require_once $templatePath . $template . '.php';
        $content = ob_get_clean();
        require_once $templatePath . $layout . '.php';
    }
}
