<?php

require_once 'application/core/exceptions.php';

class Route {

    public static function route()
    {
        $controllerName = 'main';
        $actionName = 'index';

        $route = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($route[1])) {
            $controllerName = $route[1];
        }

        if (!empty($route[2])) {
            $actionName = $route[2];
        }

        $controllerName = 'Controller_' . $controllerName;
        $actionName = 'action_' . $actionName;
        $controllerFile = strtolower($controllerName) . '.php';
        $controllerPath = "application/controllers/" . $controllerFile;
        if (file_exists($controllerPath)) {
            include "application/controllers/" . $controllerFile;
        } else {
            throw new ControllerNotFoundException('12 Error: Controller not found. Try to use another controller.');
        }

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            throw new ActionNotFoundException('13 Error: Controller and action mismatch.');
        }
    }

    public static function start()
    {
        function autoloader($class)
        {
            include 'application/models/' . strtolower($class) . '.php';
        }

        spl_autoload_register('autoloader');
        try {
            self::route();
        } catch (ControllerNotFoundException $e) {
            // redirect to 404 page
            self::ErrorPage404();
            // log exception //
        } catch (ActionNotFoundException $e) {
            // redirect to 404 page
            self::ErrorPage404();
            // log exception //
        } catch (Exception $e) {
            // redirect to maintenance page - HTTP error 500
            self::ErrorPage500();
            // log exception //
        }
    }

    static function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404'); // -> location: http://domain.com/error/404
    }

}
