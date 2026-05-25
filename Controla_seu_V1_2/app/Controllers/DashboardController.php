<?php

namespace App\Controllers;

use App\Core\Controller;

final class DashboardController extends Controller
{
    public function index(): void
    {
        $this->view('dashboard', [
            'title' => 'Dashboard',
            'saldo' => 0,
            'receitas' => 0,
            'despesas' => 0,
        ]);
    }
}
