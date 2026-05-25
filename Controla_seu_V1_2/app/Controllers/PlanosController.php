<?php

namespace App\Controllers;

use App\Core\Controller;

final class PlanosController extends Controller
{
    public function index(): void
    {
        $this->view('planos/index', ['title' => 'Planos']);
    }
}
