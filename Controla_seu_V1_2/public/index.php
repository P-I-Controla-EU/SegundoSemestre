<?php

require_once __DIR__ . '/../app/Core/Database.php';
require_once __DIR__ . '/../app/Core/Controller.php';
require_once __DIR__ . '/../app/Core/App.php';

require_once __DIR__ . '/../app/Models/Model.php';
require_once __DIR__ . '/../app/Models/Categoria.php';
require_once __DIR__ . '/../app/Models/Despesa.php';
require_once __DIR__ . '/../app/Models/Historico.php';
require_once __DIR__ . '/../app/Models/Notificacao.php';
require_once __DIR__ . '/../app/Models/Pagamento.php';
require_once __DIR__ . '/../app/Models/Planos.php';
require_once __DIR__ . '/../app/Models/Receita.php';
require_once __DIR__ . '/../app/Models/Usuario.php';

require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/CategoriaController.php';
require_once __DIR__ . '/../app/Controllers/DashboardController.php';
require_once __DIR__ . '/../app/Controllers/DespesaController.php';
require_once __DIR__ . '/../app/Controllers/HistoricoController.php';
require_once __DIR__ . '/../app/Controllers/NotificacaoController.php';
require_once __DIR__ . '/../app/Controllers/PagamentoController.php';
require_once __DIR__ . '/../app/Controllers/PlanosController.php';
require_once __DIR__ . '/../app/Controllers/ReceitaController.php';
require_once __DIR__ . '/../app/Controllers/UsuarioController.php';

$app = new App\Core\App();
$app->run();
