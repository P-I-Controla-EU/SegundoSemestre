<?php

namespace App\Controllers;

use App\Core\Controller;

final class HistoricoController extends Controller
{
    public function index(): void
    {
        $this->view('historico/index', ['title' => 'Historico']);
    }
}
