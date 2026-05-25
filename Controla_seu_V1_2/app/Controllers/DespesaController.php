<?php

namespace App\Controllers;

use App\Core\Controller;

final class DespesaController extends Controller
{
    public function index(): void
    {
        $this->view('despesa/index', ['title' => 'Despesas']);
    }
}
