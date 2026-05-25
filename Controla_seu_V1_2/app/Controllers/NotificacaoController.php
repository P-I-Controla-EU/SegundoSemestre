<?php

namespace App\Controllers;

use App\Core\Controller;

final class NotificacaoController extends Controller
{
    public function index(): void
    {
        $this->view('notificacao/index', ['title' => 'Notificacoes']);
    }
}
