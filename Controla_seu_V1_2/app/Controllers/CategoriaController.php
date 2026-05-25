<?php

namespace App\Controllers;

use App\Core\Controller;

final class CategoriaController extends Controller
{
    public function index(): void
    {
        $this->view('categoria/index', ['title' => 'Categorias']);
    }
}
