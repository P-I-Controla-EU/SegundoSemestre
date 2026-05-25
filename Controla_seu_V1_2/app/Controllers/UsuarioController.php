<?php

namespace App\Controllers;

use App\Core\Controller;

final class UsuarioController extends Controller
{
    public function perfil(): void
    {
        $this->view('usuario/perfil', ['title' => 'Perfil']);
    }
}
