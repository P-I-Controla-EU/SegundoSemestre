<?php

namespace App\Core;

final class App
{
    public function run(): void
    {
        $url = $_GET['url'] ?? 'dashboard/index';
        $parts = array_values(array_filter(explode('/', trim($url, '/'))));

        $controllerName = ucfirst($parts[0] ?? 'dashboard') . 'Controller';
        $method = $parts[1] ?? 'index';
        $params = array_slice($parts, 2);

        $controllerClass = 'App\\Controllers\\' . $controllerName;

        if (!class_exists($controllerClass) || !method_exists($controllerClass, $method)) {
            http_response_code(404);
            echo 'Pagina nao encontrada.';
            return;
        }

        $controller = new $controllerClass();
        $controller->$method(...$params);
    }
}
