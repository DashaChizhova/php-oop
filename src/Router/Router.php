<?php

namespace App\Router;

class Router{
    public function dispatch(string $uri):void
    {
        $routes = $this->getRoutes();
        // dd($_SERVER);
        // dd(APP_PATH);

        $routes[$uri]();
    }

    private function getRoutes(): array{
        return require_once APP_PATH.'/config/routes.php';
    }
}