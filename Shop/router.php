<?php

class Router
{
    const DEFAULT_CONTROLLER = 'index';

    const DEFAULT_ACTION = 'index';

    public static function start()
    {
        $request = isset($_GET['r']) ? $_GET['r'] : null;

        $controller = self::DEFAULT_CONTROLLER;
        $action = self::DEFAULT_ACTION;
        if ($request !== null && $request !== '') {
            $explodedRequest = explode('/', $request);
            $controller = $explodedRequest[0];
            if (isset($explodedRequest[1])) {
                $action = $explodedRequest[1];
            }
        }

        $controllerName = ucfirst($controller) . 'Controller';
        $fileControllerPath = 'controllers/' . $controllerName . '.php';
        if (file_exists($fileControllerPath)) {
            include $fileControllerPath;

            $controllerInstance = new $controllerName;
            $actionName = $action . 'Action';
            if (method_exists($controllerInstance, $actionName)) {
                $controllerInstance->{$actionName}();
            }
        }
    }
}