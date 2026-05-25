<?php

namespace App\Controllers;

use App\Core\Controller;

final class PagamentoController extends Controller
{
    public function index(): void
    {
        $this->view('pagamento/index', ['title' => 'Pagamentos']);
    }
}
