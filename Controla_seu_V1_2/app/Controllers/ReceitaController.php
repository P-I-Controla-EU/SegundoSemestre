<?php

namespace App\Controllers;

use App\Core\Controller;

final class ReceitaController extends Controller
{
    public function index(): void
    {
        $this->view('receita/index', ['title' => 'Receitas']);
    }
}
