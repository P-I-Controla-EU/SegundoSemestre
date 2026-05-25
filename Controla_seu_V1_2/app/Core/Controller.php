<?php

namespace App\Core;

abstract class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);

        $viewPath = dirname(__DIR__, 2) . '/views/' . $view . '.php';

        if (!is_file($viewPath)) {
            http_response_code(404);
            echo 'View nao encontrada.';
            return;
        }

        require dirname(__DIR__, 2) . '/views/shared/header.php';
        require $viewPath;
        require dirname(__DIR__, 2) . '/views/shared/footer.php';
    }

    protected function redirect(string $path): void
    {
        header('Location: ' . $path);
        exit;
    }
}
