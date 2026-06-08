<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Historico - Controla$EU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
<?php require_once "Views/header_logado.php"; ?>

<main class="container section-padding">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h1 class="mb-1">Historico</h1>
      <p class="text-muted mb-0">Acompanhe todo o historico de transacoes</p>
    </div>
  </div>

  <div class="card border-0 rounded-4 shadow-card p-4 mb-4">
    <form method="GET" class="row g-3 align-items-end">
      <input type="hidden" name="controle" value="HistoricoController">
      <input type="hidden" name="metodo" value="index">
      <div class="col-md-4">
        <label class="form-label fw-semibold">Data inicio</label>
        <input type="date" name="data_inicio" class="form-control" value="<?= $dataInicio ?>">
      </div>
      <div class="col-md-4">
        <label class="form-label fw-semibold">Data fim</label>
        <input type="date" name="data_fim" class="form-control" value="<?= $dataFim ?>">
      </div>
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary w-100">Filtrar</button>
      </div>
    </form>
  </div>

  <div class="card border-0 rounded-4 shadow-card p-4">
    <?php if (count($transacoes) > 0): ?>
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>Data</th>
            <th>Descricao</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th>Status</th>
            <th class="text-end">Valor</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($transacoes as $t): ?>
          <tr>
            <td><?= date('d/m/Y', strtotime($t->data_movimentacao)) ?></td>
            <td class="fw-medium"><?= htmlspecialchars($t->descricao) ?></td>
            <td><?= htmlspecialchars($t->categoria_nome ?? '-') ?></td>
            <td>
              <?php if ($t->tipo === 'Receita'): ?>
                <span class="badge bg-success bg-opacity-10 text-dark">Receita</span>
              <?php else: ?>
                <span class="badge bg-danger bg-opacity-10 text-danger">Despesa</span>
              <?php endif; ?>
            </td>
            <td>
              <?php if ($t->status_transacao === 'Recebido'): ?>
                <span class="badge bg-success text-dark">Recebido/Pago</span>
              <?php else: ?>
                <span class="badge bg-warning text-dark">Pendente</span>
              <?php endif; ?>
            </td>
            <td class="text-end fw-bold <?= $t->tipo === 'Receita' ? 'text-success' : 'text-danger' ?>">
              <?= $t->tipo === 'Receita' ? '+' : '-' ?> R$ <?= number_format($t->valor, 2, ',', '.') ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php else: ?>
      <p class="text-muted mb-0">Nenhuma transacao encontrada no periodo.</p>
    <?php endif; ?>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
