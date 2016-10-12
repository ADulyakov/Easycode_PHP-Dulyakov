<?php
namespace Shop\controllers;


class BaseController
{
    const MAIN_TEMPLATE = 'main.php';

    public function render($viewName, $data = array())
    {

        extract($data);

        ob_start();
        include 'views/' . $viewName . '.php';
        $content = ob_get_clean();
        include 'views/template/' . self::MAIN_TEMPLATE;
    }
}