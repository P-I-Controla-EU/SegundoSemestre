<?php

namespace App\Controllers;

use App\Core\Controller;

final class AuthController extends Controller
{
    public function login(): void
    {
        $this->view('auth/login', ['title' => 'Login']);
    }

    public function cadastro(): void
    {
        $this->view('auth/cadastro', ['title' => 'Cadastro']);
    }

    public function logout(): void
    {
        session_destroy();
        $this->redirect('/auth/login');
    }
}
